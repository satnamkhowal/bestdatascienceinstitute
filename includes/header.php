<?php
require_once __DIR__ . '/site-data.php';
$pageTitle = $pageTitle ?? 'Best Data Science Institute in Jaipur | Data Science, AI & Analytics';
$pageDescription = $pageDescription ?? 'Best Data Science Institute in Jaipur for practical Data Science, AI, Python, Data Analytics, Power BI, Machine Learning and modern technology training.';
$canonical = $canonical ?? ($bdsi['url'] . ($_SERVER['REQUEST_URI'] ?? '/'));
$canonical = strtok($canonical, '?');

$menuGroups = [
    'Best Courses' => [],
    'Programming / Core' => [],
    'Data / AI' => [],
    'Web & App' => [],
    'Cloud / DevOps' => [],
    'Career / Business' => [],
];
$featuredKeys = ['python','data-science-ai','web-development','data-analytics','generative-ai','agentic-ai'];
foreach ($featuredKeys as $key) {
    if (isset($courseCatalog[$key])) $menuGroups['Best Courses'][] = [$courseCatalog[$key]['short'], $courseCatalog[$key]['route']];
}
foreach ($courseCatalog as $course) {
    if (isset($menuGroups[$course['category']])) $menuGroups[$course['category']][] = [$course['short'], $course['route']];
}
foreach ($additionalRoutes as $route) {
    [$group,$label,$url] = $route;
    if (isset($menuGroups[$group])) $menuGroups[$group][] = [$label,$url];
}
?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta name="robots" content="index,follow,max-image-preview:large">
    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
    <link rel="icon" href="image/bdsi-logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bdsi.css">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Best Data Science Institute">
    <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
    <script type="application/ld+json"><?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => ['EducationalOrganization','LocalBusiness'],
        'name' => $bdsi['name'],
        'url' => $bdsi['url'],
        'telephone' => '+91-' . $bdsi['phone'],
        'email' => $bdsi['email'],
        'areaServed' => 'Jaipur, Rajasthan, India',
    ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
<div class="bdsi-topbar py-2">
  <div class="container-xl d-flex justify-content-between align-items-center gap-3">
    <div class="d-flex gap-4"><span>Jaipur, Rajasthan</span><a href="mailto:<?= htmlspecialchars($bdsi['email']) ?>"><?= htmlspecialchars($bdsi['email']) ?></a></div>
    <a href="tel:+91<?= htmlspecialchars($bdsi['phone']) ?>">Admissions: <?= htmlspecialchars($bdsi['phone_display']) ?></a>
  </div>
</div>
<header class="bdsi-header sticky-top px-4">
<nav class="navbar navbar-expand-xl bdsi-nav container-xl py-2">
  <a class="navbar-brand me-4" href="/"><img src="image/bdsi-logo.svg" class="bdsi-logo" alt="Best Data Science Institute Jaipur"></a>
  <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#bdsiNav" aria-controls="bdsiNav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars-staggered text-white"></i></button>
  <div class="collapse navbar-collapse" id="bdsiNav">
    <ul class="navbar-nav me-auto align-items-xl-center">
      <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
      <li class="nav-item dropdown position-static">
        <a class="nav-link dropdown-toggle" href="courses.php" data-bs-toggle="dropdown" data-bs-auto-close="outside">Courses</a>
        <div class="dropdown-menu bdsi-mega">
          <div class="row g-4">
            <?php foreach ($menuGroups as $group => $items): ?>
            <div class="col-12 col-md-6 col-xl-4">
              <h6><?= htmlspecialchars($group) ?></h6>
              <ul><?php foreach (array_slice($items,0,10) as [$label,$url]): ?><li><a href="<?= htmlspecialchars($url) ?>"><?= htmlspecialchars($label) ?></a></li><?php endforeach; ?></ul>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="mt-3 pt-3 border-top border-secondary"><a href="courses.php" class="bdsi-btn">View All Courses</a></div>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Internship</a>
        <ul class="dropdown-menu"><li><a class="dropdown-item" href="industrial-training.php">Industrial Training</a></li><li><a class="dropdown-item" href="college-training.php">Training for Colleges</a></li></ul>
      </li>
      <li class="nav-item"><a class="nav-link" href="tutorials.php">Tutorials</a></li>
      <li class="nav-item"><a class="nav-link" href="placements.php">Placements</a></li>
      <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
    </ul>
    <button class="bdsi-btn ms-xl-2" data-bs-toggle="modal" data-bs-target="#enquiryModal">Book Free Demo</button>
  </div>
</nav>
</header>
