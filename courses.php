<?php
$pageTitle='IT & Data Science Courses in Jaipur | Best Data Science Institute';
$pageDescription='Explore Data Science, Data Analytics, AI, Python, Power BI, SQL, Full Stack, Java and digital career courses in Jaipur.';
require __DIR__.'/inc/header.php';
require_once __DIR__.'/inc/course-card.php';
$courses=$data['courses'];
?>
<main class="bdsi-page">
<section class="bdsi-breadcrumb"><div class="container"><span class="bdsi-kicker">Courses</span><h1>Job-Oriented IT & Data Courses in Jaipur</h1><p>Explore practical learning paths with projects, mentor guidance and career preparation. Search by skill or filter by course category.</p></div></section>
<section class="bdsi-section bdsi-courses-directory"><div class="container">
  <div class="bdsi-course-toolbar">
    <div class="bdsi-course-search-wrap">
      <label for="courseSearch" class="visually-hidden">Search courses</label>
      <input id="courseSearch" class="bdsi-course-search" type="search" placeholder="Search Python, Data Science, Power BI, Java..." autocomplete="off">
    </div>
    <div class="course-filter" aria-label="Filter courses by category">
      <button class="active" type="button" data-course-filter="all">All Courses</button>
      <button type="button" data-course-filter="Data Science & AI">Data Science & AI</button>
      <button type="button" data-course-filter="Analytics">Analytics</button>
      <button type="button" data-course-filter="Programming">Programming</button>
      <button type="button" data-course-filter="Full Stack Development">Full Stack</button>
      <button type="button" data-course-filter="Digital Marketing">Marketing</button>
    </div>
  </div>
  <div class="d-flex justify-content-between align-items-center gap-3 mb-4"><p class="mb-0 text-secondary"><span id="courseCount"><?=count($courses)?></span> courses available</p><a href="contact.php#enquiry" class="bdsi-inline-link">Need help choosing? Talk to a counsellor →</a></div>
  <div class="row g-4" id="courseGrid">
  <?php foreach($courses as $slug=>$c): ?>
    <div class="col-md-6 col-xl-4" data-course-category="<?=htmlspecialchars($c['category'])?>" data-course-search="<?=htmlspecialchars(strtolower($c['title'].' '.$c['category'].' '.implode(' ',$c['skills'] ?? [])))?>"><?=bdsi_course_card($slug,$c)?></div>
  <?php endforeach; ?>
  </div>
  <div id="courseEmptyState" class="bdsi-course-empty d-none"><h3>No matching course found</h3><p>Try another technology name or clear the current category filter.</p><button type="button" class="btn btn-accent" data-course-reset>Show All Courses</button></div>
</div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5"><div class="col-lg-5"><span class="bdsi-kicker">Need Help Choosing?</span><h2 class="mt-2">Talk to a Course Counsellor</h2><p>Tell us your current qualification and career goal. We can help you compare suitable programs and current batch options.</p></div><div class="col-lg-7"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div></div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>