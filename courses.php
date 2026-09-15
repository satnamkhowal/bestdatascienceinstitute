<?php
$pageTitle='IT & Data Science Courses in Jaipur | Best Data Science Institute';
$pageDescription='Explore Data Science, Data Analytics, AI, Python, Power BI, SQL, Full Stack, Java and digital career courses in Jaipur.';
require __DIR__.'/inc/header.php';
$courses=$data['courses'];
?>
<main class="bdsi-page">
<section class="bdsi-breadcrumb"><div class="container"><span class="bdsi-kicker">Courses</span><h1>Job-Oriented IT & Data Courses in Jaipur</h1><p>Explore practical learning paths with projects, mentor guidance and career preparation.</p></div></section>
<section class="bdsi-section"><div class="container">
  <div class="course-filter"><button class="active" data-course-filter="all">All</button><button data-course-filter="Data Science & AI">Data Science & AI</button><button data-course-filter="Analytics">Analytics</button><button data-course-filter="Programming">Programming</button><button data-course-filter="Full Stack Development">Full Stack</button><button data-course-filter="Digital Marketing">Marketing</button></div>
  <div class="row g-4">
  <?php foreach($courses as $slug=>$c): ?>
    <div class="col-md-6 col-xl-4" data-course-category="<?=htmlspecialchars($c['category'])?>"><article class="bdsi-course-card"><span class="badge"><?=htmlspecialchars($c['category'])?></span><h3><?=htmlspecialchars($c['title'])?></h3><p><?=htmlspecialchars($c['summary'])?></p><div class="mb-3"><?php foreach(array_slice($c['skills'],0,4) as $skill): ?><span class="bdsi-pill"><?=htmlspecialchars($skill)?></span><?php endforeach; ?></div><p><strong><?=htmlspecialchars($c['duration'])?></strong></p><a href="<?=$slug?>.php">View Curriculum →</a></article></div>
  <?php endforeach; ?>
  </div>
</div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5"><div class="col-lg-5"><span class="bdsi-kicker">Need Help Choosing?</span><h2 class="mt-2">Talk to a Course Counsellor</h2><p>Tell us your current qualification and career goal. We can help you compare suitable programs and current batch options.</p></div><div class="col-lg-7"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div></div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>