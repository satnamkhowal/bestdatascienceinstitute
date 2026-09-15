<?php
$pageTitle='Data Science, Data Analytics & AI Career Guides | Best Data Science Institute';
$pageDescription='Read practical 2026 guides on Data Science, Data Analytics, Python, SQL, Power BI, Generative AI, course fees, syllabus and career roadmaps.';
$articles = require __DIR__.'/inc/guide-data.php';
require __DIR__.'/inc/header.php';
?>
<main class="bdsi-page">
<section class="bdsi-breadcrumb"><div class="container"><span class="bdsi-kicker">Learning Resources</span><h1>Data Science, Analytics & AI Career Guides</h1><p>Practical Jaipur-focused guides, syllabi, roadmaps and comparisons for students planning a career in data and technology.</p></div></section>
<section class="bdsi-section"><div class="container">
  <div class="d-flex flex-wrap gap-2 mb-4"><span class="badge">Data Science</span><span class="badge">Data Analytics</span><span class="badge">Python</span><span class="badge">SQL</span><span class="badge">Power BI</span><span class="badge">Generative AI</span></div>
  <div class="row g-4">
  <?php foreach($articles as $slug=>$a): ?>
    <div class="col-md-6 col-xl-4"><article class="bdsi-course-card h-100"><span class="badge"><?=htmlspecialchars($a['category'])?></span><h3><?=htmlspecialchars($a['title'])?></h3><p><?=htmlspecialchars($a['description'])?></p><a href="<?=htmlspecialchars($slug)?>.php">Read Guide →</a></article></div>
  <?php endforeach; ?>
  </div>
</div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5"><div class="col-lg-5"><span class="bdsi-kicker">Need Personal Guidance?</span><h2 class="mt-2">Discuss Your Learning Goal</h2><p>Use these guides to shortlist a path, then discuss your qualification, current skills and target role with the counselling team.</p><div class="mt-4"><a class="btn btn-accent" href="courses.php">Explore All Courses</a></div></div><div class="col-lg-7"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div></div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>