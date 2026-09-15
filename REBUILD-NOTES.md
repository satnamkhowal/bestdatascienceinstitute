# Best Data Science Institute rebuild

This branch rebuilds the existing static Recode HTML theme into a reusable PHP website while preserving the theme assets and visual language.

## Main architecture

- `index.php` — homepage
- `includes/header.php` / `includes/footer.php` — shared layout and Forsk-style mega menu
- `includes/site-data.php` — central course/menu catalog
- `course.php` — dynamic course page controller for clean course slugs
- `page.php` — shared controller for Courses, About, Blog, Contact, Internship, College Training, Tutorials and Placements
- `submit-enquiry.php` — lead endpoint
- `css/bdsi.css` — BDSI layer over the existing Recode theme
- `image/bdsi-logo.svg` — theme-matched BDSI logo
- `.htaccess` — legacy redirects + clean route handling
- `sitemap.xml` / `robots.txt` — SEO discovery

## Lead form setup

Every lead is stored in `storage/private/leads.csv` and an email notification is attempted using PHP `mail()`.

Recommended environment variables:

- `BDSI_LEAD_EMAIL` — notification mailbox. Defaults to `info@bestdatascienceinstitute.com`.
- `BDSI_LEAD_STORAGE` — absolute private storage directory, preferably outside public web root.
- `BDSI_GOOGLE_SHEET_WEBHOOK` — optional Google Apps Script / automation webhook receiving JSON.
- `BDSI_LEAD_WEBHOOK` — optional second webhook (CRM, n8n, etc.).
- `BDSI_IP_SALT` — random secret used only to hash visitor IPs before storage.

The form records source URL plus `utm_source`, `utm_medium`, `utm_campaign`, `utm_term` and `utm_content`.

## Legacy redirect map included

- `/courses.html` -> `/courses.php`
- `/about.html` -> `/about.php`
- `/blog.html` -> `/blog.php`
- `/contact.html` -> `/contact.php`
- `/blog-page-2.html` -> `/blog.php?page=2`
- `/course-details/core-python.html` -> `/python-course-jaipur/`
- `/course-details/data-analytics.html` -> `/data-analytics-course-jaipur/`
- `/course-details/data-science.html` -> `/data-science-course-jaipur/`
- Existing Data Analytics/Data Science blog-detail URLs -> closest corresponding course content

Add any additional historical URLs found in Search Console/server logs to `.htaccess` with a one-to-one relevant destination. Avoid redirecting unrelated missing pages to the homepage.

## Deployment assumptions

The host must support PHP and Apache rewrite rules (`mod_rewrite`). `DirectoryIndex` is set to prefer `index.php`. The old `index.html` is permanently redirected to `/`.
