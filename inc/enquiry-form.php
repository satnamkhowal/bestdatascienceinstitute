<?php
$sent = isset($_GET['sent']) && $_GET['sent'] === '1';
$error = isset($_GET['error']);
$formData = $data ?? require __DIR__.'/site-data.php';
$formCourses = $formData['courses'] ?? [];
$extraCourseFile = __DIR__.'/course-extras.php';
if (is_file($extraCourseFile)) {
  $formCourses = array_replace($formCourses, require $extraCourseFile);
}
?>
<div class="bdsi-form-wrap">
  <h3>Request Free Course Counselling</h3>
  <p>Submit your details for course, batch and career-path guidance.</p>
  <?php if($sent): ?><div class="bdsi-alert success mb-3">Thanks. Your enquiry has been received.</div><?php endif; ?>
  <?php if($error): ?><div class="bdsi-alert error mb-3">We could not process the enquiry. Please check the required fields or call us directly.</div><?php endif; ?>
  <form action="submit-enquiry.php" method="post" novalidate>
    <input type="text" name="website" class="hp-field" tabindex="-1" autocomplete="off" aria-hidden="true">
    <input type="hidden" name="source_page" value="<?= htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/') ?>">
    <div class="row g-3">
      <div class="col-md-6"><label for="name">Full Name *</label><input id="name" class="form-control" type="text" name="name" maxlength="80" required></div>
      <div class="col-md-6"><label for="phone">Mobile Number *</label><input id="phone" class="form-control" type="tel" name="phone" inputmode="numeric" maxlength="15" required></div>
      <div class="col-md-6"><label for="email">Email Address</label><input id="email" class="form-control" type="email" name="email" maxlength="120"></div>
      <div class="col-md-6"><label for="city">City</label><input id="city" class="form-control" type="text" name="city" maxlength="80" value="Jaipur"></div>
      <div class="col-md-6"><label for="qualification">Current Qualification</label><select id="qualification" class="form-select" name="qualification"><option value="">Select</option><option>School Student</option><option>BCA</option><option>B.Tech</option><option>B.Sc</option><option>BBA</option><option>MCA</option><option>M.Tech</option><option>M.Sc</option><option>MBA</option><option>Graduate</option><option>Working Professional</option><option>Other</option></select></div>
      <div class="col-md-6"><label for="program">Interested Program *</label><select id="program" class="form-select" name="program" required><option value="">Select course</option><?php foreach($formCourses as $formCourse): $optionName=preg_replace('/ Course in Jaipur$/','',$formCourse['title'] ?? ''); if(!$optionName) continue; ?><option value="<?=htmlspecialchars($optionName)?>"><?=htmlspecialchars($optionName)?></option><?php endforeach; ?><option>Internship</option><option>Industrial Training</option><option>Final Year Project</option><option>College Admission</option><option>Other</option></select></div>
      <div class="col-12"><label for="message">Message / Requirement</label><textarea id="message" class="form-control" name="message" maxlength="1000" placeholder="Tell us your learning or career goal"></textarea></div>
      <div class="col-12"><div class="form-check"><input class="form-check-input" type="checkbox" value="1" id="consent" name="consent" required><label class="form-check-label" for="consent">I agree that Best Data Science Institute may contact me about this enquiry.</label></div></div>
      <div class="col-12"><button class="btn btn-accent w-100" type="submit">Request Counselling Call</button></div>
    </div>
  </form>
</div>
