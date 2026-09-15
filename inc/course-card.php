<?php
if (!function_exists('bdsi_course_visual_meta')) {
    function bdsi_course_visual_meta(string $slug, array $course): array
    {
        $visuals = [
            'data-science-course-jaipur' => ['DS', 'Data Science', 'tone-mint'],
            'data-analytics-course-jaipur' => ['DA', 'Data Analytics', 'tone-blue'],
            'python-programming-course-jaipur' => ['PY', 'Python', 'tone-gold'],
            'machine-learning-course-jaipur' => ['ML', 'Machine Learning', 'tone-violet'],
            'artificial-intelligence-course-jaipur' => ['AI', 'Artificial Intelligence', 'tone-rose'],
            'generative-ai-course-jaipur' => ['GA', 'Generative AI', 'tone-purple'],
            'agentic-ai-course-jaipur' => ['AG', 'Agentic AI', 'tone-violet'],
            'deep-learning-course-jaipur' => ['DL', 'Deep Learning', 'tone-indigo'],
            'nlp-course-jaipur' => ['NLP', 'Natural Language Processing', 'tone-cyan'],
            'computer-vision-course-jaipur' => ['CV', 'Computer Vision', 'tone-blue'],
            'llm-course-jaipur' => ['LLM', 'Large Language Models', 'tone-purple'],
            'rag-course-jaipur' => ['RAG', 'RAG Training', 'tone-mint'],
            'mlops-course-jaipur' => ['MLOPS', 'MLOps', 'tone-slate'],
            'power-bi-course-jaipur' => ['BI', 'Power BI', 'tone-amber'],
            'sql-course-jaipur' => ['SQL', 'SQL', 'tone-cyan'],
            'advanced-excel-course-jaipur' => ['XL', 'Advanced Excel', 'tone-green'],
            'business-analytics-course-jaipur' => ['BA', 'Business Analytics', 'tone-blue'],
            'ai-business-analyst-course-jaipur' => ['AIBA', 'AI Business Analyst', 'tone-mint'],
            'full-stack-development-course-jaipur' => ['FS', 'Full Stack', 'tone-indigo'],
            'web-development-course-jaipur' => ['WD', 'Web Development', 'tone-violet'],
            'mern-stack-course-jaipur' => ['MERN', 'MERN Stack', 'tone-green'],
            'mean-stack-course-jaipur' => ['MEAN', 'MEAN Stack', 'tone-rose'],
            'java-full-stack-course-jaipur' => ['JFS', 'Java Full Stack', 'tone-orange'],
            'python-full-stack-course-jaipur' => ['PFS', 'Python Full Stack', 'tone-gold'],
            'asp-net-full-stack-course-jaipur' => ['.NET', 'ASP.NET Full Stack', 'tone-indigo'],
            'react-js-course-jaipur' => ['RE', 'React.js', 'tone-cyan'],
            'react-nextjs-course-jaipur' => ['RN', 'React & Next.js', 'tone-slate'],
            'nodejs-course-jaipur' => ['NODE', 'Node.js Backend', 'tone-green'],
            'flutter-course-jaipur' => ['FL', 'Flutter App Development', 'tone-blue'],
            'java-programming-course-jaipur' => ['JAVA', 'Java', 'tone-rose'],
            'c-programming-course-jaipur' => ['C', 'C Programming', 'tone-slate'],
            'cpp-programming-course-jaipur' => ['C++', 'C++', 'tone-blue'],
            'javascript-course-jaipur' => ['JS', 'JavaScript', 'tone-gold'],
            'php-course-jaipur' => ['PHP', 'PHP', 'tone-purple'],
            'c-sharp-course-jaipur' => ['C#', 'C#', 'tone-violet'],
            'data-structures-algorithms-course-jaipur' => ['DSA', 'DSA', 'tone-blue'],
            'programming-fundamentals-course-jaipur' => ['PF', 'Programming Fundamentals', 'tone-slate'],
            'cloud-computing-course-jaipur' => ['CL', 'Cloud Computing', 'tone-cyan'],
            'aws-course-jaipur' => ['AWS', 'AWS', 'tone-orange'],
            'azure-course-jaipur' => ['AZ', 'Azure Cloud', 'tone-blue'],
            'devops-course-jaipur' => ['DO', 'DevOps', 'tone-indigo'],
            'docker-kubernetes-course-jaipur' => ['DK', 'Docker & Kubernetes', 'tone-cyan'],
            'git-github-course-jaipur' => ['GIT', 'Git & GitHub', 'tone-slate'],
            'cyber-security-course-jaipur' => ['CS', 'Cyber Security', 'tone-rose'],
            'digital-marketing-course-jaipur' => ['DM', 'Digital Marketing', 'tone-orange'],
            'ui-ux-design-course-jaipur' => ['UX', 'UI/UX Design', 'tone-purple'],
            'tally-prime-gst-course-jaipur' => ['TG', 'Tally Prime & GST', 'tone-green'],
            'software-testing-course-jaipur' => ['QA', 'Software Testing & QA', 'tone-blue'],
        ];

        if (isset($visuals[$slug])) {
            return $visuals[$slug];
        }

        $title = preg_replace('/ Course in Jaipur$/', '', $course['title'] ?? 'IT Course');
        $words = preg_split('/\s+/', trim($title));
        $symbol = '';
        foreach (array_slice($words, 0, 2) as $word) {
            $symbol .= strtoupper(substr($word, 0, 1));
        }
        return [$symbol ?: 'IT', $title, 'tone-mint'];
    }
}

if (!function_exists('bdsi_course_level')) {
    function bdsi_course_level(array $course): string
    {
        $category = $course['category'] ?? '';
        if ($category === 'Data Science & AI' || $category === 'Full Stack Development') {
            return 'Beginner to Advanced';
        }
        if ($category === 'Analytics' || $category === 'Cloud & Security' || $category === 'Career & Business') {
            return 'Beginner to Intermediate';
        }
        return 'Beginner Friendly';
    }
}

if (!function_exists('bdsi_course_visual')) {
    function bdsi_course_visual(string $slug, array $course, bool $large = false): string
    {
        [$symbol, $shortTitle, $tone] = bdsi_course_visual_meta($slug, $course);
        $url = htmlspecialchars($slug . '.php');
        $largeClass = $large ? ' bdsi-course-visual-lg' : '';
        return '<a class="bdsi-course-visual ' . htmlspecialchars($tone) . $largeClass . '" href="' . $url . '" aria-label="View ' . htmlspecialchars($course['title'] ?? $shortTitle) . '">' .
            '<span class="bdsi-course-symbol">' . htmlspecialchars($symbol) . '</span>' .
            '<span class="bdsi-course-visual-label">' . htmlspecialchars($shortTitle) . '</span>' .
            '<span class="bdsi-course-orbit" aria-hidden="true"></span>' .
            '</a>';
    }
}

if (!function_exists('bdsi_course_card')) {
    function bdsi_course_card(string $slug, array $course, bool $compact = false): string
    {
        $url = htmlspecialchars($slug . '.php');
        $title = htmlspecialchars($course['title'] ?? 'Course');
        $category = htmlspecialchars($course['category'] ?? 'IT Courses');
        $summary = htmlspecialchars($course['summary'] ?? 'Practical, project-focused technology training.');
        $duration = htmlspecialchars($course['duration'] ?? 'Ask for duration');
        $level = htmlspecialchars(bdsi_course_level($course));
        $skills = array_slice($course['skills'] ?? [], 0, $compact ? 3 : 4);

        $html = '<article class="bdsi-course-card h-100">';
        $html .= bdsi_course_visual($slug, $course);
        $html .= '<div class="bdsi-course-body">';
        $html .= '<div class="d-flex justify-content-between align-items-start gap-2"><span class="badge">' . $category . '</span><span class="bdsi-course-mode">Projects</span></div>';
        $html .= '<h3><a href="' . $url . '">' . $title . '</a></h3>';
        $html .= '<p class="bdsi-course-summary">' . $summary . '</p>';
        $html .= '<div class="bdsi-course-skills">';
        foreach ($skills as $skill) {
            $html .= '<span class="bdsi-pill">' . htmlspecialchars($skill) . '</span>';
        }
        $html .= '</div>';
        $html .= '<div class="bdsi-course-meta"><span><strong>' . $duration . '</strong><small>Duration</small></span><span><strong>' . $level . '</strong><small>Level</small></span></div>';
        $html .= '<a class="bdsi-course-cta" href="' . $url . '"><span>View Course</span><span aria-hidden="true">→</span></a>';
        $html .= '</div></article>';
        return $html;
    }
}
