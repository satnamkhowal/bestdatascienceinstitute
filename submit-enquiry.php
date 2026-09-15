<?php
if($_SERVER['REQUEST_METHOD']!=='POST'){ header('Location: contact.php'); exit; }
function clean($value,$max=500){ $value=trim((string)$value); $value=preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/u','',$value); return mb_substr($value,0,$max); }
if(!empty($_POST['website'] ?? '')){ header('Location: contact.php?sent=1#enquiry'); exit; }
$name=clean($_POST['name']??'',80); $phone=clean($_POST['phone']??'',20); $email=clean($_POST['email']??'',120); $city=clean($_POST['city']??'',80); $qualification=clean($_POST['qualification']??'',80); $program=clean($_POST['program']??'',120); $message=clean($_POST['message']??'',1000); $source=clean($_POST['source_page']??'/',180); $consent=($_POST['consent']??'')==='1';
$phoneDigits=preg_replace('/\D+/','',$phone);
if($name==='' || strlen($phoneDigits)<10 || $program==='' || !$consent || ($email!=='' && !filter_var($email,FILTER_VALIDATE_EMAIL))){ header('Location: contact.php?error=1#enquiry'); exit; }
$storage=__DIR__.'/storage'; if(!is_dir($storage)){ @mkdir($storage,0750,true); }
$csv=$storage.'/leads.csv'; $new=!file_exists($csv); $fp=@fopen($csv,'a');
function csv_safe($v){ return preg_match('/^[=+\-@]/',$v) ? "'".$v : $v; }
if($fp){ flock($fp,LOCK_EX); if($new){ fputcsv($fp,['created_at','name','phone','email','city','qualification','program','message','source_page','ip_hash']); } $ipHash=hash('sha256',($_SERVER['REMOTE_ADDR']??'').'|bdsi-2026'); fputcsv($fp,[date('c'),csv_safe($name),csv_safe($phone),csv_safe($email),csv_safe($city),csv_safe($qualification),csv_safe($program),csv_safe($message),csv_safe($source),$ipHash]); flock($fp,LOCK_UN); fclose($fp); }
$to='info@bestdatascienceinstitute.com';
$subject='New Website Enquiry: '.$program;
$body="New enquiry received from bestdatascienceinstitute.com\n\nName: $name\nPhone: $phone\nEmail: $email\nCity: $city\nQualification: $qualification\nProgram: $program\nMessage: $message\nSource: $source\n";
$headers="From: Website Enquiry <info@bestdatascienceinstitute.com>\r\nReply-To: ".($email!==''?$email:'info@bestdatascienceinstitute.com')."\r\nContent-Type: text/plain; charset=UTF-8";
@mail($to,$subject,$body,$headers);
header('Location: contact.php?sent=1#enquiry'); exit;
