<?php
$pageTitle='Data Science & IT Career Guides | Best Data Science Institute';
$pageDescription='Read practical learning and career guides on Data Science, Data Analytics, Python, Power BI, AI and IT training.';
require __DIR__.'/inc/header.php';
$guides=[
 ['best-data-science-course-career-guide','Best Data Science Course: A Practical Career Guide for Students','How to evaluate curriculum, projects, tools, mentors and career support before choosing a data science course.','Data Science'],
 ['data-analytics-vs-data-science','Data Analytics vs Data Science: Which Course Should You Choose?','Compare skills, tools, roles and learning paths before choosing between analytics and data science.','Career Guide'],
 ['python-for-data-science-roadmap','Python for Data Science Roadmap for Beginners','A structured beginner path through Python, NumPy, Pandas, visualization, SQL and machine learning.','Python']
];
?>
<main class="bdsi-page">
<section class="bdsi-breadcrumb"><div class="container"><span class="bdsi-kicker">Learning Resources</span><h1>Data, AI & Technology Career Guides</h1><p>Practical articles to help students understand skills, tools, courses and career pathways.</p></div></section>
<section class="bdsi-section"><div class="container"><div class="row g-4"><?php foreach($guides as $g): ?><div class="col-md-6 col-xl-4"><article class="bdsi-course-card"><span class="badge"><?=htmlspecialchars($g[3])?></span><h3><?=htmlspecialchars($g[1])?></h3><p><?=htmlspecialchars($g[2])?></p><a href="<?=$g[0]?>.php">Read Guide →</a></article></div><?php endforeach; ?></div></div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5"><div class="col-lg-5"><span class="bdsi-kicker">Need Personal Guidance?</span><h2 class="mt-2">Discuss Your Learning Goal</h2><p>Articles can help you compare paths, but the right course depends on your current skills, qualification and target role.</p></div><div class="col-lg-7"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div></div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>