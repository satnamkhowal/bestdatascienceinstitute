<?php
$data = require __DIR__ . '/site-data.php';
$site = $data['site'];
$pageTitle = $pageTitle ?? $site['name'] . ' | Data Science, AI & IT Courses in Jaipur';
$pageDescription = $pageDescription ?? 'Practical Data Science, Data Analytics, AI, Programming and Full Stack training in Jaipur with projects and career guidance.';
$canonical = $canonical ?? ('https://bestdatascienceinstitute.com' . strtok($_SERVER['REQUEST_URI'] ?? '/', '?'));
$ogType = $ogType ?? 'website';
$structuredData = $structuredData ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDescription) ?>">
  <meta property="og:type" content="<?= htmlspecialchars($ogType) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:site_name" content="Best Data Science Institute">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" type="image/svg+xml" href="image/bdsi-logo.svg">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/site.css">
  <link rel="stylesheet" href="css/course-cards.css">
<?php foreach ($structuredData as $schema): ?>
  <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) ?></script>
<?php endforeach; ?>
</head>
<body>
<header class="bdsi-header fixed-top">
  <nav class="navbar navbar-expand-xl navbar-dark">
    <div class="container-fluid px-xl-5 px-3">
      <a class="navbar-brand bdsi-brand" href="/">
        <img src="image/bdsi-logo.svg" alt="Best Data Science Institute logo" width="210" height="52">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bdsiNav" aria-controls="bdsiNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="bdsiNav">
        <ul class="navbar-nav ms-auto align-items-xl-center gap-xl-1">
          <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="about-us.php" data-bs-toggle="dropdown">About Us</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about-us.php">About Institute</a></li>
              <li><a class="dropdown-item" href="about-us.php#mission">Mission & Vision</a></li>
              <li><a class="dropdown-item" href="about-us.php#why-us">Why Choose Us</a></li>
              <li><a class="dropdown-item" href="about-us.php#career-support">Career Support</a></li>
              <li><a class="dropdown-item" href="about-us.php#faqs">FAQs</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown position-static"><a class="nav-link dropdown-toggle" href="courses.php" data-bs-toggle="dropdown">Courses</a>
            <div class="dropdown-menu bdsi-mega-menu">
              <div class="row g-4">
                <div class="col-lg-3"><h6>Programming</h6>
                  <a href="python-programming-course-jaipur.php">Python Programming</a>
                  <a href="java-programming-course-jaipur.php">Java Programming</a>
                  <a href="c-programming-course-jaipur.php">C Programming</a>
                  <a href="cpp-programming-course-jaipur.php">C++ Programming</a>
                  <a href="javascript-course-jaipur.php">JavaScript</a>
                  <a href="php-course-jaipur.php">PHP</a>
                  <a href="c-sharp-course-jaipur.php">C#</a>
                </div>
                <div class="col-lg-3"><h6>Full Stack Development</h6>
                  <a href="full-stack-development-course-jaipur.php">Full Stack Development</a>
                  <a href="mern-stack-course-jaipur.php">MERN Stack</a>
                  <a href="mean-stack-course-jaipur.php">MEAN Stack</a>
                  <a href="java-full-stack-course-jaipur.php">Java Full Stack</a>
                  <a href="python-full-stack-course-jaipur.php">Python Full Stack</a>
                  <a href="asp-net-full-stack-course-jaipur.php">ASP.NET Full Stack</a>
                  <a href="react-js-course-jaipur.php">React.js</a>
                </div>
                <div class="col-lg-3"><h6>Data Science & AI</h6>
                  <a href="data-analytics-course-jaipur.php">Data Analytics</a>
                  <a href="business-analytics-course-jaipur.php">Business Analytics</a>
                  <a href="data-science-course-jaipur.php">Data Science</a>
                  <a href="machine-learning-course-jaipur.php">Machine Learning</a>
                  <a href="artificial-intelligence-course-jaipur.php">Artificial Intelligence</a>
                  <a href="generative-ai-course-jaipur.php">Generative AI</a>
                  <a href="power-bi-course-jaipur.php">Power BI</a>
                </div>
                <div class="col-lg-3"><h6>More Career Skills</h6>
                  <a href="sql-course-jaipur.php">SQL</a>
                  <a href="advanced-excel-course-jaipur.php">Advanced Excel</a>
                  <a href="cloud-computing-course-jaipur.php">Cloud Computing</a>
                  <a href="aws-course-jaipur.php">AWS</a>
                  <a href="devops-course-jaipur.php">DevOps</a>
                  <a href="cyber-security-course-jaipur.php">Cyber Security</a>
                  <a href="digital-marketing-course-jaipur.php">Digital Marketing</a>
                </div>
              </div>
              <div class="mt-3 pt-3 border-top border-secondary"><a class="mega-all" href="courses.php">Browse All Courses →</a></div>
            </div>
          </li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Programs</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="courses.php?type=diploma">Diploma Programs</a></li>
              <li><a class="dropdown-item" href="contact.php?interest=Internship">Internship Programs</a></li>
              <li><a class="dropdown-item" href="contact.php?interest=Industrial%20Training">Industrial Training</a></li>
              <li><a class="dropdown-item" href="contact.php?interest=Final%20Year%20Project">Final Year Projects</a></li>
              <li><a class="dropdown-item" href="contact.php?interest=College%20Admission">College Admissions</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="blog.php">Resources</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
        <a class="btn btn-accent ms-xl-3 mt-3 mt-xl-0" href="contact.php#enquiry">Get Free Counselling</a>
      </div>
    </div>
  </nav>
</header>