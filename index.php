<?php
$pageTitle='Best Data Science Institute in Jaipur | Data Science, AI & Analytics Courses';
$pageDescription='Career-focused Data Science, Data Analytics, AI, Python, Power BI and Full Stack training in Jaipur with practical projects and counselling.';
$canonical='https://bestdatascienceinstitute.com/';
$structuredData=[
  ['@context'=>'https://schema.org','@type'=>'EducationalOrganization','name'=>'Best Data Science Institute','url'=>'https://bestdatascienceinstitute.com/','logo'=>'https://bestdatascienceinstitute.com/image/bdsi-logo.svg','description'=>$pageDescription,'email'=>'info@bestdatascienceinstitute.com','telephone'=>'+91-8503906164','areaServed'=>'Jaipur, Rajasthan, India'],
  ['@context'=>'https://schema.org','@type'=>'WebSite','name'=>'Best Data Science Institute','url'=>'https://bestdatascienceinstitute.com/']
];
require __DIR__.'/inc/header.php';
require_once __DIR__.'/inc/course-card.php';
$courses=$data['courses'];
$featured=['data-science-course-jaipur','data-analytics-course-jaipur','python-programming-course-jaipur','machine-learning-course-jaipur','artificial-intelligence-course-jaipur','power-bi-course-jaipur'];
$latestGuides=[
 ['best-data-science-course-jaipur-2026','Best Data Science Course in Jaipur in 2026: What to Check Before Enrolling'],
 ['data-science-course-fees-jaipur','Data Science Course Fees in Jaipur: What Actually Affects the Cost?'],
 ['data-analyst-roadmap-2026','Data Analyst Roadmap 2026: Excel, SQL, Power BI and Python'],
 ['data-analytics-course-syllabus-jaipur','Data Analytics Course Syllabus in Jaipur: Skills You Should Learn']
];
?>
<main class="bdsi-page">
<section class="bdsi-hero">
  <div class="container py-5"><div class="row align-items-center g-5">
    <div class="col-lg-7">
      <span class="bdsi-kicker">Practical Data, AI & IT Training • Jaipur</span>
      <h1 class="mt-3">Build Real Skills in <span class="text-accent">Data Science, AI & Analytics</span></h1>
      <p class="mt-4">Learn through mentor-led sessions, practical assignments, real datasets, projects and career-focused guidance. Programs are structured for beginners, graduates and working professionals.</p>
      <div class="d-flex flex-wrap gap-3 mt-4">
        <a class="btn btn-accent" href="contact.php#enquiry">Get Free Counselling</a>
        <a class="btn btn-accent accent" href="courses.php">Explore Courses</a>
      </div>
      <div class="mt-4"><span class="bdsi-pill">Python + SQL</span><span class="bdsi-pill">Power BI</span><span class="bdsi-pill">Machine Learning</span><span class="bdsi-pill">Live Projects</span><span class="bdsi-pill">Interview Preparation</span></div>
    </div>
    <div class="col-lg-5"><div class="bdsi-glow-card bdsi-hero-art"><img src="image/img1.png" alt="Student learning data science and programming at Best Data Science Institute Jaipur" loading="eager"></div></div>
  </div></div>
</section>
<section class="bdsi-stats"><div class="container"><div class="row g-3">
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>15+</strong><span>Technology Courses</span></div></div>
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>Hands-on</strong><span>Practical Learning</span></div></div>
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>Projects</strong><span>Portfolio Focus</span></div></div>
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>Career</strong><span>Guidance & Preparation</span></div></div>
</div></div></section>
<section class="bdsi-section bdsi-courses-showcase"><div class="container">
  <div class="bdsi-section-title"><span class="bdsi-kicker">Popular Learning Paths</span><h2 class="mt-2">Courses Built Around Practical Work</h2><p>Start with fundamentals, practise tools and workflows, then build portfolio-ready projects. Each course card now opens its dedicated curriculum page.</p></div>
  <div class="row g-4">
  <?php foreach($featured as $slug): $c=$courses[$slug]; ?>
    <div class="col-md-6 col-xl-4"><?=bdsi_course_card($slug,$c,true)?></div>
  <?php endforeach; ?>
  </div>
  <div class="mt-4 text-center"><a class="btn btn-accent" href="courses.php">Browse All Courses</a></div>
</div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5 align-items-center">
  <div class="col-lg-5"><img src="image/img2.png" class="img-fluid rounded-4" alt="Practical mentor-led IT training in Jaipur" loading="lazy"></div>
  <div class="col-lg-7"><span class="bdsi-kicker">How Learning Works</span><h2 class="mt-2">Learn → Practice → Build → Prepare</h2><p>Our course flow is designed to move beyond one-way theory. Students learn concepts, practise guided exercises, build projects and prepare to explain their work in interviews.</p>
    <div class="row g-3 mt-2"><div class="col-md-6"><div class="bdsi-content-card"><h4>01. Clear Fundamentals</h4><p>Build the foundation before moving into frameworks and advanced tools.</p></div></div><div class="col-md-6"><div class="bdsi-content-card"><h4>02. Hands-on Practice</h4><p>Use assignments, code practice, datasets and troubleshooting sessions.</p></div></div><div class="col-md-6"><div class="bdsi-content-card"><h4>03. Portfolio Projects</h4><p>Create work you can discuss during interviews and career conversations.</p></div></div><div class="col-md-6"><div class="bdsi-content-card"><h4>04. Career Preparation</h4><p>Get guidance for resume, portfolio, interview preparation and placement assistance.</p></div></div></div>
  </div>
</div></div></section>
<section class="bdsi-section"><div class="container"><div class="bdsi-section-title"><span class="bdsi-kicker">2026 Learning Guides</span><h2 class="mt-2">Research Your Career Path Before Enrolling</h2><p>Use our practical guides to compare course content, fees, tools and learning roadmaps.</p></div><div class="row g-4"><?php foreach($latestGuides as $g): ?><div class="col-md-6"><article class="bdsi-content-card h-100"><h3><?=$g[1]?></h3><a href="<?=$g[0]?>.php">Read Guide →</a></article></div><?php endforeach; ?></div><div class="mt-4"><a class="btn btn-accent" href="blog.php">Browse All Guides</a></div></div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5 align-items-start">
  <div class="col-lg-5"><span class="bdsi-kicker">Free Course Counselling</span><h2 class="mt-2">Not Sure Which Course Fits Your Goal?</h2><p>Share your qualification, preferred field and career goal. Our counselling team can help you shortlist a suitable learning path and current batch options.</p><ul class="bdsi-checklist"><li>Beginner-friendly guidance</li><li>Current learning-mode guidance depending on batch</li><li>Course duration, curriculum and fee guidance</li><li>Practical project and career-path discussion</li></ul><p class="mt-4"><strong>Call:</strong> <a href="tel:8503906164">+91 85039 06164</a><br><strong>Email:</strong> <a href="mailto:info@bestdatascienceinstitute.com">info@bestdatascienceinstitute.com</a></p></div>
  <div class="col-lg-7" id="enquiry"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div>
</div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>
