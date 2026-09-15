<?php $data = $data ?? require __DIR__ . '/site-data.php'; $site = $data['site']; ?>
<footer class="bdsi-footer">
  <div class="container py-5">
    <div class="row g-4">
      <div class="col-lg-4">
        <img src="image/bdsi-logo.svg" alt="Best Data Science Institute" width="220" height="54" class="mb-3">
        <p>Practical training in Data Science, Analytics, AI, Programming and Full Stack Development for students, graduates and working professionals.</p>
        <p class="mb-0 small"><?= htmlspecialchars($site['brand_note']) ?></p>
      </div>
      <div class="col-6 col-lg-2"><h6>Popular Courses</h6>
        <a href="data-science-course-jaipur.php">Data Science</a>
        <a href="data-analytics-course-jaipur.php">Data Analytics</a>
        <a href="python-programming-course-jaipur.php">Python</a>
        <a href="power-bi-course-jaipur.php">Power BI</a>
      </div>
      <div class="col-6 col-lg-2"><h6>Resources</h6>
        <a href="courses.php">All Courses</a>
        <a href="about-us.php">About Us</a>
        <a href="blog.php">Career Guides</a>
        <a href="contact.php">Contact</a>
      </div>
      <div class="col-lg-4"><h6>Contact</h6>
        <p class="mb-2">Mansarovar & Mahesh Nagar, Jaipur, Rajasthan</p>
        <a href="tel:<?= htmlspecialchars($site['phone']) ?>"><?= htmlspecialchars($site['phone_display']) ?></a>
        <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a>
      </div>
    </div>
  </div>
  <div class="bdsi-footer-bottom"><div class="container py-3 d-flex flex-wrap justify-content-between gap-2"><span>© <?= date('Y') ?> Best Data Science Institute. All rights reserved.</span><span><?= htmlspecialchars($site['brand_note']) ?></span></div></div>
</footer>
<a class="bdsi-float bdsi-whatsapp" href="https://wa.me/918503906164" target="_blank" rel="noopener">WhatsApp</a>
<a class="bdsi-float bdsi-call" href="tel:<?= htmlspecialchars($site['phone']) ?>">Call</a>
<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="js/site.js"></script>
</body>
</html>
