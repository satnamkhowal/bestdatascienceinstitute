<?php
$slug=preg_replace('/[^a-z0-9-]/','',$_GET['slug']??'');
$articles=array_merge(require __DIR__.'/inc/guide-data.php', require __DIR__.'/inc/legacy-guide-data.php', require __DIR__.'/inc/guide-data-local-seo.php');
if(!$slug || !isset($articles[$slug])){
  http_response_code(404);
  $pageTitle='Guide Not Found | Best Data Science Institute';
  $pageDescription='The requested learning guide could not be found.';
  require __DIR__.'/inc/header.php';
  echo '<main class="bdsi-page"><section class="bdsi-breadcrumb"><div class="container"><h1>Guide Not Found</h1><p>Please browse our latest Data Science and Analytics resources.</p><a class="btn btn-accent" href="blog.php">Browse Resources</a></div></section></main>';
  require __DIR__.'/inc/footer.php';
  exit;
}
$a=$articles[$slug];
$pageTitle=$a['title'].' | Best Data Science Institute';
$pageDescription=$a['description'];
$legacySlugs=['top-programming-skills-every-student-should-learn-before-graduation'];
$canonical=in_array($slug,$legacySlugs,true)?'https://bestdatascienceinstitute.com/'.$slug.'/':'https://bestdatascienceinstitute.com/'.$slug.'.php';
$ogType='article';
$faqEntities=[];
foreach($a['faqs'] as $faq){$faqEntities[]=['@type'=>'Question','name'=>$faq[0],'acceptedAnswer'=>['@type'=>'Answer','text'=>$faq[1]]];}
$structuredData=[
  ['@context'=>'https://schema.org','@type'=>'Article','headline'=>$a['title'],'description'=>$a['description'],'mainEntityOfPage'=>$canonical,'datePublished'=>'2026-09-15','dateModified'=>'2026-09-15','author'=>['@type'=>'Organization','name'=>'Best Data Science Institute'],'publisher'=>['@type'=>'Organization','name'=>'Best Data Science Institute','url'=>'https://bestdatascienceinstitute.com/']],
  ['@context'=>'https://schema.org','@type'=>'FAQPage','mainEntity'=>$faqEntities],
  ['@context'=>'https://schema.org','@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://bestdatascienceinstitute.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Resources','item'=>'https://bestdatascienceinstitute.com/blog.php'],
    ['@type'=>'ListItem','position'=>3,'name'=>$a['title'],'item'=>$canonical]
  ]]
];
require __DIR__.'/inc/header.php';
$related=[];
foreach($articles as $relatedSlug=>$relatedArticle){if($relatedSlug!==$slug && $relatedArticle['category']===$a['category']){$related[$relatedSlug]=$relatedArticle;}}
if(count($related)<3){foreach($articles as $relatedSlug=>$relatedArticle){if($relatedSlug!==$slug && !isset($related[$relatedSlug])){$related[$relatedSlug]=$relatedArticle;} if(count($related)>=3) break;}}
?>
<main class="bdsi-page">
<section class="bdsi-breadcrumb"><div class="container"><span class="bdsi-kicker"><?=htmlspecialchars($a['category'])?> Guide</span><h1><?=htmlspecialchars($a['title'])?></h1><p><?=htmlspecialchars($a['description'])?></p></div></section>
<section class="bdsi-section"><div class="container"><div class="row g-5">
  <article class="col-lg-8">
    <?php foreach($a['sections'] as $index=>$s): ?><section class="mb-5"><h2><?=htmlspecialchars($s[0])?></h2><p><?=htmlspecialchars($s[1])?></p><?php if($index===1): ?><p><a href="<?=htmlspecialchars($a['course']['url'])?>"><?=htmlspecialchars($a['course']['label'])?> →</a></p><?php endif; ?></section><?php endforeach; ?>
    <section class="mt-5"><span class="bdsi-kicker">Frequently Asked Questions</span><h2 class="mt-2">FAQs</h2><div class="accordion" id="guideFaq"><?php foreach($a['faqs'] as $i=>$faq): ?><div class="accordion-item bg-transparent border-secondary"><h3 class="accordion-header"><button class="accordion-button collapsed bg-transparent text-white" type="button" data-bs-toggle="collapse" data-bs-target="#guideFaq<?=$i?>"><?=htmlspecialchars($faq[0])?></button></h3><div id="guideFaq<?=$i?>" class="accordion-collapse collapse" data-bs-parent="#guideFaq"><div class="accordion-body"><p><?=htmlspecialchars($faq[1])?></p></div></div></div><?php endforeach; ?></div></section>
    <div class="bdsi-content-card mt-5"><h3>Ready to build these skills?</h3><p>See the related course curriculum, practical training approach and enquiry options.</p><a class="btn btn-accent" href="<?=htmlspecialchars($a['course']['url'])?>"><?=htmlspecialchars($a['course']['label'])?></a></div>
  </article>
  <aside class="col-lg-4"><div class="bdsi-content-card position-sticky" style="top:110px"><span class="bdsi-kicker">Related Guides</span><h3 class="mt-2">Keep Learning</h3><?php foreach(array_slice($related,0,3,true) as $rSlug=>$r): $rHref=in_array($rSlug,$legacySlugs,true)?$rSlug.'/':$rSlug.'.php'; ?><p class="mb-3"><a href="<?=htmlspecialchars($rHref)?>"><?=htmlspecialchars($r['title'])?></a></p><?php endforeach; ?><hr class="border-secondary"><a href="blog.php">Browse all resources →</a></div></aside>
</div></div></section>
</main>
<?php require __DIR__.'/inc/footer.php'; ?>