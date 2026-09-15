<?php
$pageTitle='Best Data Science Institute in Jaipur | Data Science, AI & Analytics Courses';
$pageDescription='Career-focused Data Science, Data Analytics, AI, Python, Power BI and Full Stack training in Jaipur with practical projects and counselling.';
require __DIR__.'/inc/header.php';
$courses=$data['courses'];
$featured=['data-science-course-jaipur','data-analytics-course-jaipur','python-programming-course-jaipur','machine-learning-course-jaipur','artificial-intelligence-course-jaipur','power-bi-course-jaipur'];
?>
<main class="bdsi-page">
<section class="bdsi-hero">
  <div class="container py-5"><div class="row align-items-center g-5">
    <div class="col-lg-7">
      <span class="bdsi-kicker">Practical IT Training Institute • Jaipur</span>
      <h1 class="mt-3">Build Real Skills in <span class="text-accent">Data Science, AI & Analytics</span></h1>
      <p class="mt-4">Learn through mentor-led sessions, practical assignments, real datasets, live projects and career-focused guidance. Programs are available for beginners, graduates and working professionals.</p>
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
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>15+</strong><span>Career Courses</span></div></div>
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>100%</strong><span>Practical Focus</span></div></div>
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>2</strong><span>Jaipur Offices</span></div></div>
  <div class="col-6 col-lg-3"><div class="bdsi-stat"><strong>1:1</strong><span>Career Guidance</span></div></div>
</div></div></section>
<section class="bdsi-section"><div class="container">
  <div class="bdsi-section-title"><span class="bdsi-kicker">Popular Learning Paths</span><h2 class="mt-2">Courses Built Around Practical Work</h2><p>Start with fundamentals, practise tools and workflows, then build portfolio-ready projects.</p></div>
  <div class="row g-4">
  <?php foreach($featured as $slug): $c=$courses[$slug]; ?>
    <div class="col-md-6 col-xl-4"><article class="bdsi-course-card"><span class="badge"><?=htmlspecialchars($c['category'])?></span><h3><?=htmlspecialchars($c['title'])?></h3><p><?=htmlspecialchars($c['summary'])?></p><div class="mb-3"><span class="bdsi-pill"><?=htmlspecialchars($c['duration'])?></span><span class="bdsi-pill">Projects Included</span></div><a href="<?=$slug?>.php">View Course →</a></article></div>
  <?php endforeach; ?>
  </div>
  <div class="mt-4"><a class="btn btn-accent" href="courses.php">Browse All Courses</a></div>
</div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5 align-items-center">
  <div class="col-lg-5"><img src="image/img2.png" class="img-fluid rounded-4" alt="Practical mentor-led IT training in Jaipur" loading="lazy"></div>
  <div class="col-lg-7"><span class="bdsi-kicker">How Learning Works</span><h2 class="mt-2">Learn → Practice → Build → Prepare</h2><p>Our course flow is designed to move beyond one-way theory. Students learn concepts, practise guided exercises, build projects and prepare to explain their work in interviews.</p>
    <div class="row g-3 mt-2"><div class="col-md-6"><div class="bdsi-content-card"><h4>01. Clear Fundamentals</h4><p>Build the foundation before moving into frameworks and advanced tools.</p></div></div><div class="col-md-6"><div class="bdsi-content-card"><h4>02. Hands-on Practice</h4><p>Use assignments, code practice, datasets and troubleshooting sessions.</p></div></div><div class="col-md-6"><div class="bdsi-content-card"><h4>03. Portfolio Projects</h4><p>Create work you can discuss during interviews and career conversations.</p></div></div><div class="col-md-6"><div class="bdsi-content-card"><h4>04. Career Preparation</h4><p>Get guidance for resume, portfolio, interview preparation and placement assistance.</p></div></div></div>
  </div>
</div></div></section>
<section class="bdsi-section"><div class="container"><div class="row g-5 align-items-start">
  <div class="col-lg-5"><span class="bdsi-kicker">Free Course Counselling</span><h2 class="mt-2">Not Sure Which Course Fits Your Goal?</h2><p>Share your qualification, preferred field and career goal. Our counselling team can help you shortlist a suitable learning path and current batch options.</p><ul class="bdsi-checklist"><li>Beginner-friendly guidance</li><li>Online and Jaipur classroom options depending on batch</li><li>Course duration, curriculum and fee guidance</li><li>Practical project and career-path discussion</li></ul><p class="mt-4"><strong>Call:</strong> <a href="tel:8503906164">+91 85039 06164</a><br><strong>Email:</strong> <a href="mailto:info@bestdatascienceinstitute.com">info@bestdatascienceinstitute.com</a></p></div>
  <div class="col-lg-7" id="enquiry"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div>
</div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>
