<?php
declare(strict_types=1);
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

function respond(bool $ok, string $message, int $status = 200): never {
    http_response_code($status);
    echo json_encode(['ok' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}
function clean(?string $value, int $max = 180): string {
    $value = trim((string)$value);
    $value = preg_replace('/\s+/u', ' ', $value) ?? '';
    return mb_substr($value, 0, $max);
}
function post_webhook(string $url, array $payload): void {
    if ($url === '') return;
    $body = json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [CURLOPT_POST => true, CURLOPT_POSTFIELDS => $body, CURLOPT_HTTPHEADER => ['Content-Type: application/json'], CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 4, CURLOPT_CONNECTTIMEOUT => 2]);
        curl_exec($ch); curl_close($ch); return;
    }
    @file_get_contents($url, false, stream_context_create(['http' => ['method' => 'POST', 'header' => "Content-Type: application/json\r\n", 'content' => $body, 'timeout' => 4]]));
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') respond(false, 'Method not allowed.', 405);
if (clean($_POST['website'] ?? '') !== '') respond(true, 'Thank you.'); // honeypot

session_start();
$now = time();
if (isset($_SESSION['bdsi_last_lead']) && ($now - (int)$_SESSION['bdsi_last_lead']) < 12) respond(false, 'Please wait a few seconds before submitting again.', 429);

$fullName = clean($_POST['full_name'] ?? '', 100);
$phone = clean($_POST['phone'] ?? '', 24);
$email = clean($_POST['email'] ?? '', 140);
$city = clean($_POST['city'] ?? '', 80);
$course = clean($_POST['course'] ?? '', 120);
$qualification = clean($_POST['qualification'] ?? '', 120);
$mode = clean($_POST['preferred_mode'] ?? '', 40);
$sourceUrl = clean($_POST['source_url'] ?? '', 500);

if ($fullName === '' || mb_strlen($fullName) < 2) respond(false, 'Please enter your full name.', 422);
$phoneDigits = preg_replace('/\D+/', '', $phone) ?? '';
if (strlen($phoneDigits) < 8 || strlen($phoneDigits) > 15) respond(false, 'Please enter a valid mobile number.', 422);
if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) respond(false, 'Please enter a valid email address.', 422);
if ($course === '') respond(false, 'Please select an interested program.', 422);
if ($sourceUrl !== '' && !filter_var($sourceUrl, FILTER_VALIDATE_URL)) $sourceUrl = '';

$lead = [
    'lead_id' => 'BDSI-' . gmdate('Ymd-His') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6)),
    'created_at' => date('c'),
    'full_name' => $fullName,
    'phone' => $phone,
    'email' => $email,
    'city' => $city,
    'course' => $course,
    'qualification' => $qualification,
    'preferred_mode' => $mode,
    'source_url' => $sourceUrl,
    'utm_source' => clean($_POST['utm_source'] ?? '', 100),
    'utm_medium' => clean($_POST['utm_medium'] ?? '', 100),
    'utm_campaign' => clean($_POST['utm_campaign'] ?? '', 140),
    'utm_term' => clean($_POST['utm_term'] ?? '', 140),
    'utm_content' => clean($_POST['utm_content'] ?? '', 140),
    'ip_hash' => hash('sha256', ($_SERVER['REMOTE_ADDR'] ?? '') . '|' . (getenv('BDSI_IP_SALT') ?: 'bdsi')),
    'user_agent' => clean($_SERVER['HTTP_USER_AGENT'] ?? '', 300),
];

$storageDir = getenv('BDSI_LEAD_STORAGE') ?: (__DIR__ . '/storage/private');
if (!is_dir($storageDir) && !@mkdir($storageDir, 0750, true) && !is_dir($storageDir)) respond(false, 'Lead storage is not writable. Please call us at +91 91160 36041.', 500);
$csvPath = rtrim($storageDir, '/\\') . '/leads.csv';
$isNew = !is_file($csvPath) || filesize($csvPath) === 0;
$fp = @fopen($csvPath, 'ab');
if (!$fp) respond(false, 'Lead storage is not writable. Please call us at +91 91160 36041.', 500);
if (flock($fp, LOCK_EX)) {
    if ($isNew) fputcsv($fp, array_keys($lead));
    fputcsv($fp, array_values($lead));
    fflush($fp); flock($fp, LOCK_UN);
}
fclose($fp);

$_SESSION['bdsi_last_lead'] = $now;

$notifyTo = getenv('BDSI_LEAD_EMAIL') ?: 'info@bestdatascienceinstitute.com';
$subject = 'New BDSI Lead: ' . $course . ' — ' . $fullName;
$message = "New website enquiry\n\n";
foreach ($lead as $key => $value) { if ($key !== 'ip_hash' && $key !== 'user_agent') $message .= ucwords(str_replace('_', ' ', $key)) . ': ' . $value . "\n"; }
$host = preg_replace('/[^a-z0-9.-]/i', '', $_SERVER['HTTP_HOST'] ?? 'bestdatascienceinstitute.com');
$headers = "From: BDSI Website <no-reply@{$host}>\r\nReply-To: " . ($email ?: $notifyTo) . "\r\nContent-Type: text/plain; charset=UTF-8\r\n";
@mail($notifyTo, $subject, $message, $headers);

post_webhook((string)(getenv('BDSI_GOOGLE_SHEET_WEBHOOK') ?: ''), $lead);
post_webhook((string)(getenv('BDSI_LEAD_WEBHOOK') ?: ''), $lead);

respond(true, 'Thank you. Your enquiry has been received. Our counsellor will contact you shortly.');
