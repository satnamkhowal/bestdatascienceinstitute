<?php
$data = require __DIR__.'/inc/site-data.php';
$slug = trim($_GET['slug'] ?? 'data-science-course-jaipur');
$slug = preg_replace('/[^a-z0-9-]/','',$slug);
$course = $data['courses'][$slug] ?? null;
if(!$course){
  $base = preg_replace('/-course-jaipur$/','',$slug);
  $name = ucwords(str_replace(['-','js','php','sql','aws'],[' ','JS','PHP','SQL','AWS'],$base));
  $course = [
    'title'=>$name.' Course in Jaipur',
    'category'=>'IT Courses',
    'duration'=>'Ask for current batch',
    'summary'=>'Practical, mentor-led '.$name.' training in Jaipur with structured learning, assignments, projects and career guidance.',
    'skills'=>['Core Concepts','Practical Skills','Industry Tools','Problem Solving','Projects','Debugging','Interview Preparation','Career Roadmap']
  ];
}
$pageTitle=$course['title'].' | Best Data Science Institute';
$pageDescription=$course['summary'].' Learn with projects and career-focused guidance in Jaipur.';
$canonical='https://bestdatascienceinstitute.com/'.$slug.'.php';
require __DIR__.'/inc/header.php';
$modules=[
 ['Foundations','Core terminology, learning roadmap, environment setup and essential fundamentals.'],
 ['Core Skills','Concepts, syntax/workflows, guided practice and common real-world use cases.'],
 ['Intermediate Practice','Structured exercises, data/code handling, troubleshooting and quality checks.'],
 ['Advanced Concepts','Advanced techniques, optimization, reliability and professional workflows.'],
 ['Tools & Workflow','Industry tools, version control, documentation and collaboration practices.'],
 ['Practical Implementation','Scenario-based practice, debugging, validation and reusable workflows.'],
 ['Project Planning','Requirements, solution design, implementation plan and testing checklist.'],
 ['Capstone Project','Build, test, refine and document a portfolio-ready project.'],
 ['Interview Preparation','Technical questions, project explanation and practical assessments.'],
 ['Career Roadmap','Portfolio, resume guidance, relevant roles and next-step specializations.']
];
?>
<main class="bdsi-page">
<section class="bdsi-breadcrumb"><div class="container"><span class="bdsi-kicker"><?=htmlspecialchars($course['category'])?></span><h1><?=htmlspecialchars($course['title'])?></h1><p><?=htmlspecialchars($course['summary'])?></p><div class="mt-3"><span class="bdsi-pill"><?=htmlspecialchars($course['duration'])?></span><span class="bdsi-pill">Project Based</span><span class="bdsi-pill">Beginner Friendly</span><span class="bdsi-pill">Career Guidance</span></div></div></section>
<section class="bdsi-section"><div class="container"><div class="row g-5">
<div class="col-lg-8">
  <span class="bdsi-kicker">Course Overview</span><h2 class="mt-2">Build Practical, Job-Relevant Skills</h2>
  <p>This program follows a structured path from fundamentals to practical implementation. Learners practise concepts through guided exercises, scenario-based assignments and project work while learning how to explain their approach clearly.</p>
  <h3 class="mt-5">Skills You’ll Build</h3><div class="mb-4"><?php foreach($course['skills'] as $skill): ?><span class="bdsi-pill"><?=htmlspecialchars($skill)?></span><?php endforeach; ?></div>
  <h3 class="mt-5">Course Curriculum</h3><div class="row g-3 mt-1"><?php foreach($modules as $i=>$m): ?><div class="col-md-6"><div class="bdsi-content-card"><span class="bdsi-kicker"><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><h4 class="mt-2"><?=htmlspecialchars($m[0])?></h4><p><?=htmlspecialchars($m[1])?></p></div></div><?php endforeach; ?></div>
  <h3 class="mt-5">Practical Projects</h3><ul class="bdsi-checklist"><li>Guided mini project aligned to the course domain</li><li>Feature-based assignments and troubleshooting tasks</li><li>Real-world scenario project using professional workflow</li><li>Final portfolio/capstone project with documentation</li></ul>
  <h3 class="mt-5">Who Should Join?</h3><ul class="bdsi-checklist"><li>Students and freshers building practical technology skills</li><li>College learners preparing for technical assessments and projects</li><li>Working professionals looking to upskill or change roles</li><li>Beginners who prefer structured, mentor-guided learning</li></ul>
</div>
<div class="col-lg-4"><div class="bdsi-content-card position-sticky" style="top:110px"><span class="bdsi-kicker">Course Snapshot</span><h3 class="mt-2"><?=htmlspecialchars($course['title'])?></h3><p><?=htmlspecialchars($course['summary'])?></p><ul class="bdsi-checklist"><li><?=htmlspecialchars($course['duration'])?></li><li>Practical assignments</li><li>Project guidance</li><li>Interview preparation</li><li>Placement assistance</li></ul><a class="btn btn-accent w-100" href="contact.php?interest=<?=urlencode(preg_replace('/ Course in Jaipur$/','',$course['title']))?>#enquiry">Enquire About This Course</a></div></div>
</div></div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5"><div class="col-lg-5"><span class="bdsi-kicker">Free Counselling</span><h2 class="mt-2">Ask About Fees, Batch & Learning Mode</h2><p>Current batch schedule, fee and online/offline availability can vary by program. Submit an enquiry for the latest details.</p></div><div class="col-lg-7"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div></div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>