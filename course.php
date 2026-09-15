<?php
$data = require __DIR__.'/inc/site-data.php';
require_once __DIR__.'/inc/course-card.php';
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
$defaultModules=[
 ['Foundations','Core terminology, learning roadmap, environment setup and essential fundamentals.'],
 ['Core Skills','Concepts, syntax/workflows, guided practice and common real-world use cases.'],
 ['Intermediate Practice','Structured exercises, data/code handling, troubleshooting and quality checks.'],
 ['Advanced Concepts','Advanced techniques, optimization, reliability and professional workflows.'],
 ['Tools & Workflow','Industry tools, version control, documentation and collaboration practices.'],
 ['Practical Implementation','Scenario-based practice, debugging, validation and reusable workflows.'],
 ['Project Planning','Requirements, solution design, implementation plan and testing checklist.'],
 ['Capstone Project','Build, test, refine and document a portfolio-ready project.']
];
$modules=$course['modules']??$defaultModules;
$pageTitle=$course['title'].' | Best Data Science Institute';
$pageDescription=$course['summary'].' Learn with projects and career-focused guidance in Jaipur.';
$canonical='https://bestdatascienceinstitute.com/'.$slug.'.php';
$courseName=preg_replace('/ Course in Jaipur$/','',$course['title']);
$courseFaqs=[
 ['Who can join the '.$courseName.' course?','Students, freshers, working professionals and beginners can enquire. The exact starting level depends on the course, and foundational support is included where relevant.'],
 ['Does the '.$courseName.' course include practical work?','Yes. The learning path includes guided exercises, assignments and project work so learners can apply concepts instead of studying only theory.'],
 ['How can I check the latest '.$courseName.' fees and batch schedule?','Use the enquiry form or contact the counselling team because current fees, batch timing and learning mode can vary by intake.']
];
$faqSchema=[];foreach($courseFaqs as $faq){$faqSchema[]=['@type'=>'Question','name'=>$faq[0],'acceptedAnswer'=>['@type'=>'Answer','text'=>$faq[1]]];}
$structuredData=[
 ['@context'=>'https://schema.org','@type'=>'Course','name'=>$course['title'],'description'=>$pageDescription,'url'=>$canonical,'provider'=>['@type'=>'Organization','name'=>'Best Data Science Institute','url'=>'https://bestdatascienceinstitute.com/']],
 ['@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>$faqSchema],
 ['@context'=>'https://schema.org','@type'=>'BreadcrumbList','itemListElement'=>[
   ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://bestdatascienceinstitute.com/'],
   ['@type'=>'ListItem','position'=>2,'name'=>'Courses','item'=>'https://bestdatascienceinstitute.com/courses.php'],
   ['@type'=>'ListItem','position'=>3,'name'=>$course['title'],'item'=>$canonical]
 ]]
];
$guides=require __DIR__.'/inc/guide-data.php';
$relatedGuides=[];
foreach($guides as $guideSlug=>$guide){if(($guide['course']['url']??'')===$slug.'.php'){$relatedGuides[$guideSlug]=$guide;}}
require __DIR__.'/inc/header.php';
?>
<main class="bdsi-page">
<section class="bdsi-breadcrumb"><div class="container"><div class="row align-items-center g-5"><div class="col-lg-7 bdsi-course-hero-copy"><span class="bdsi-kicker"><?=htmlspecialchars($course['category'])?></span><h1><?=htmlspecialchars($course['title'])?></h1><p><?=htmlspecialchars($course['summary'])?></p><div class="mt-3"><span class="bdsi-pill"><?=htmlspecialchars($course['duration'])?></span><span class="bdsi-pill"><?=htmlspecialchars(bdsi_course_level($course))?></span><span class="bdsi-pill">Project Based</span><span class="bdsi-pill">Career Guidance</span></div><div class="d-flex flex-wrap gap-3 mt-4"><a class="btn btn-accent" href="contact.php?interest=<?=urlencode($courseName)?>#enquiry">Get Course Details</a><a class="btn btn-accent accent" href="#curriculum">View Curriculum</a></div></div><div class="col-lg-5"><div class="bdsi-course-hero-visual-wrap"><?=bdsi_course_visual($slug,$course,true)?></div></div></div></div></section>
<section class="bdsi-section"><div class="container"><div class="row g-5">
<div class="col-lg-8">
  <span class="bdsi-kicker">Course Overview</span><h2 class="mt-2">Build Practical, Job-Relevant <?=htmlspecialchars($courseName)?> Skills</h2>
  <p>This program follows a structured path from fundamentals to practical implementation. Learners practise concepts through guided exercises, scenario-based assignments and project work while learning how to explain their approach clearly.</p>
  <h3 class="mt-5">Skills You’ll Build</h3><div class="mb-4"><?php foreach($course['skills'] as $skill): ?><span class="bdsi-pill"><?=htmlspecialchars($skill)?></span><?php endforeach; ?></div>
  <div id="curriculum"></div><h3 class="mt-5"><?=htmlspecialchars($courseName)?> Course Curriculum</h3><div class="row g-3 mt-1"><?php foreach($modules as $i=>$m): ?><div class="col-md-6"><div class="bdsi-content-card h-100"><span class="bdsi-kicker"><?=str_pad((string)($i+1),2,'0',STR_PAD_LEFT)?></span><h4 class="mt-2"><?=htmlspecialchars($m[0])?></h4><p><?=htmlspecialchars($m[1])?></p></div></div><?php endforeach; ?></div>
  <h3 class="mt-5">Practical Projects</h3><ul class="bdsi-checklist"><li>Guided mini project aligned to the course domain</li><li>Feature-based assignments and troubleshooting tasks</li><li>Real-world scenario project using professional workflow</li><li>Final portfolio/capstone project with documentation</li></ul>
  <h3 class="mt-5">Who Should Join?</h3><ul class="bdsi-checklist"><li>Students and freshers building practical technology skills</li><li>College learners preparing for technical assessments and projects</li><li>Working professionals looking to upskill or change roles</li><li>Beginners who prefer structured, mentor-guided learning</li></ul>
  <?php if($relatedGuides): ?><section class="mt-5"><span class="bdsi-kicker">Recommended Reading</span><h2 class="mt-2">Learn Before You Enrol</h2><div class="row g-3"><?php foreach(array_slice($relatedGuides,0,4,true) as $gSlug=>$g): ?><div class="col-md-6"><div class="bdsi-content-card h-100"><h4><?=htmlspecialchars($g['title'])?></h4><p><?=htmlspecialchars($g['description'])?></p><a href="<?=htmlspecialchars($gSlug)?>.php">Read Guide →</a></div></div><?php endforeach; ?></div></section><?php endif; ?>
  <section class="mt-5"><span class="bdsi-kicker">Frequently Asked Questions</span><h2 class="mt-2"><?=htmlspecialchars($courseName)?> Course FAQs</h2><div class="accordion" id="courseFaq"><?php foreach($courseFaqs as $i=>$faq): ?><div class="accordion-item bg-transparent border-secondary"><h3 class="accordion-header"><button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#courseFaq<?=$i?>"><?=htmlspecialchars($faq[0])?></button></h3><div id="courseFaq<?=$i?>" class="accordion-collapse collapse" data-bs-parent="#courseFaq"><div class="accordion-body"><p><?=htmlspecialchars($faq[1])?></p></div></div></div><?php endforeach; ?></div></section>
</div>
<div class="col-lg-4"><div class="bdsi-content-card bdsi-course-snapshot position-sticky" style="top:110px"><?=bdsi_course_visual($slug,$course)?><span class="bdsi-kicker">Course Snapshot</span><h3 class="mt-2"><?=htmlspecialchars($course['title'])?></h3><p><?=htmlspecialchars($course['summary'])?></p><ul class="bdsi-checklist"><li><?=htmlspecialchars($course['duration'])?></li><li><?=htmlspecialchars(bdsi_course_level($course))?></li><li>Practical assignments</li><li>Project guidance</li><li>Interview preparation</li><li>Placement assistance</li></ul><a class="btn btn-accent w-100" href="contact.php?interest=<?=urlencode($courseName)?>#enquiry">Enquire About This Course</a></div></div>
</div></div></section>
<section class="bdsi-section bdsi-section-alt"><div class="container"><div class="row g-5"><div class="col-lg-5"><span class="bdsi-kicker">Free Counselling</span><h2 class="mt-2">Ask About Fees, Batch & Learning Mode</h2><p>Current batch schedule, fee and online/offline availability can vary by program. Submit an enquiry for the latest details.</p></div><div class="col-lg-7"><?php include __DIR__.'/inc/enquiry-form.php'; ?></div></div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>