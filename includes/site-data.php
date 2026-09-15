<?php
/**
 * Best Data Science Institute shared site configuration.
 * Keep public-facing course URLs aligned with Forsk Coding School's route structure.
 */

$bdsi = [
    'name' => 'Best Data Science Institute',
    'short_name' => 'BDSI',
    'phone' => '9116036041',
    'phone_display' => '+91 91160 36041',
    'email' => 'info@bestdatascienceinstitute.com',
    'city' => 'Jaipur, Rajasthan',
    'url' => 'https://bestdatascienceinstitute.com',
];

$courseCatalog = [
    'python' => [
        'title' => 'Python Programming Course in Jaipur',
        'short' => 'Python Programming',
        'route' => 'python-programming-jaipur.php',
        'category' => 'Programming / Core',
        'summary' => 'Build strong Python fundamentals with hands-on coding, problem solving, APIs, files, databases and practical mini projects.',
        'duration' => 'Instructor-led practical training',
        'tools' => ['Python', 'VS Code', 'Git', 'Jupyter'],
        'modules' => ['Python fundamentals and environment setup', 'Data types, operators and control flow', 'Functions, modules and packages', 'Object-oriented programming', 'Files, exceptions and debugging', 'APIs, JSON and database basics', 'Git workflow and practical projects'],
        'careers' => ['Python Developer', 'Automation Developer', 'Data/AI Foundation'],
    ],
    'data-science-ai' => [
        'title' => 'Data Science with Artificial Intelligence Course in Jaipur',
        'short' => 'Data Science with AI',
        'route' => 'data-science-with-artificial-intelligence-ai-jaipur.php',
        'category' => 'Data / AI',
        'summary' => 'Learn Python, statistics, data analysis, machine learning and modern AI workflows through practical datasets and portfolio projects.',
        'duration' => 'Career-focused instructor-led program',
        'tools' => ['Python', 'Pandas', 'Scikit-learn', 'SQL', 'Power BI'],
        'modules' => ['Python for data work', 'Statistics and probability', 'NumPy and Pandas', 'Data cleaning and exploratory analysis', 'SQL for analytics', 'Visualization and dashboards', 'Machine learning foundations', 'Model evaluation and improvement', 'Generative AI foundations', 'Capstone project and interview preparation'],
        'careers' => ['Data Scientist', 'Junior ML Engineer', 'Data Analyst', 'AI Associate'],
    ],
    'data-analytics' => [
        'title' => 'Data Analytics Course in Jaipur',
        'short' => 'Data Analytics',
        'route' => 'data-analytics-course-jaipur.php',
        'category' => 'Data / AI',
        'summary' => 'Master Excel, SQL, Power BI, Python and business-focused analytics with dashboards, case studies and real datasets.',
        'duration' => 'Practical analytics training',
        'tools' => ['Excel', 'SQL', 'Power BI', 'Python'],
        'modules' => ['Excel for analytics', 'Data cleaning and preparation', 'SQL querying and joins', 'Statistics for business decisions', 'Power BI dashboards and DAX', 'Python analytics with Pandas', 'Case studies and portfolio projects', 'Interview and resume preparation'],
        'careers' => ['Data Analyst', 'Business Analyst', 'BI Analyst', 'MIS Analyst'],
    ],
    'web-development' => [
        'title' => 'Web Development Training in Jaipur',
        'short' => 'Web Development',
        'route' => 'web-development-training-jaipur.php',
        'category' => 'Web & App',
        'summary' => 'Learn modern frontend and backend foundations by building responsive websites and deployable web projects.',
        'duration' => 'Project-based training',
        'tools' => ['HTML', 'CSS', 'JavaScript', 'Git', 'Backend Basics'],
        'modules' => ['HTML and semantic web', 'Responsive CSS and Bootstrap', 'JavaScript fundamentals', 'DOM and browser APIs', 'Backend and database basics', 'Git, deployment and live projects'],
        'careers' => ['Web Developer', 'Frontend Developer', 'Junior Full Stack Developer'],
    ],
    'generative-ai' => [
        'title' => 'Generative AI Course in Jaipur',
        'short' => 'Generative AI',
        'route' => 'generative-ai-course-jaipur.php',
        'category' => 'Data / AI',
        'summary' => 'Understand LLMs, prompt engineering, embeddings, RAG and practical generative AI application development.',
        'duration' => 'Applied AI training',
        'tools' => ['Python', 'LLMs', 'Embeddings', 'RAG', 'APIs'],
        'modules' => ['Generative AI and LLM foundations', 'Prompt design and evaluation', 'LLM APIs and structured outputs', 'Embeddings and vector search', 'RAG application patterns', 'Safety, evaluation and cost control', 'Practical GenAI application project'],
        'careers' => ['GenAI Developer', 'AI Application Developer', 'AI Automation Associate'],
    ],
    'agentic-ai' => [
        'title' => 'Agentic AI & AI Agents Course in Jaipur',
        'short' => 'AI Agent & Agentic AI',
        'route' => 'agentic-ai-course-jaipur.php',
        'category' => 'Data / AI',
        'summary' => 'Build tool-using AI agents and multi-step automation workflows with practical orchestration and evaluation patterns.',
        'duration' => 'Advanced applied AI training',
        'tools' => ['Python', 'LLM APIs', 'Tools', 'RAG', 'Automation'],
        'modules' => ['Agentic AI foundations', 'Tool/function calling', 'Planning and task decomposition', 'Memory and retrieval patterns', 'Multi-agent workflow basics', 'Guardrails and evaluation', 'Agent automation capstone'],
        'careers' => ['AI Automation Developer', 'Agentic AI Developer', 'Applied AI Engineer'],
    ],
    'power-bi' => [
        'title' => 'Power BI Course in Jaipur', 'short' => 'Power BI', 'route' => 'power-bi-course-jaipur.php', 'category' => 'Data / AI',
        'summary' => 'Build business dashboards, data models and DAX measures for practical reporting and decision-making.',
        'duration' => 'Dashboard-focused training', 'tools' => ['Power BI', 'Power Query', 'DAX', 'Excel'],
        'modules' => ['Data import and Power Query', 'Data modeling', 'DAX measures', 'Interactive dashboards', 'Publishing and project work'],
        'careers' => ['Power BI Developer', 'BI Analyst', 'Data Analyst'],
    ],
    'machine-learning' => [
        'title' => 'Machine Learning Course in Jaipur', 'short' => 'Machine Learning', 'route' => 'machine-learning-course-jaipur.php', 'category' => 'Data / AI',
        'summary' => 'Learn supervised and unsupervised machine learning, preprocessing, model evaluation and deployment foundations.',
        'duration' => 'Hands-on ML training', 'tools' => ['Python', 'Scikit-learn', 'Pandas', 'Jupyter'],
        'modules' => ['ML workflow', 'Regression', 'Classification', 'Clustering', 'Feature engineering', 'Model evaluation', 'Capstone project'],
        'careers' => ['ML Associate', 'Data Scientist', 'AI/ML Intern'],
    ],
    'deep-learning' => [
        'title' => 'Deep Learning Course in Jaipur', 'short' => 'Deep Learning', 'route' => 'deep-learning-course-jaipur.php', 'category' => 'Data / AI',
        'summary' => 'Study neural networks, CNNs, sequence models and transfer learning through practical deep learning projects.',
        'duration' => 'Advanced AI training', 'tools' => ['Python', 'TensorFlow/Keras', 'Jupyter'],
        'modules' => ['Neural network foundations', 'Training and optimization', 'CNNs', 'Sequence models', 'Transfer learning', 'Applied project'],
        'careers' => ['Deep Learning Associate', 'AI Engineer', 'Computer Vision/NLP Foundation'],
    ],
    'aws' => [
        'title' => 'Best AWS Cloud Training in Jaipur', 'short' => 'AWS Cloud', 'route' => 'best-aws-cloud-training-in-jaipur.php', 'category' => 'Cloud / DevOps',
        'summary' => 'Learn cloud fundamentals and core AWS services with deployment-oriented labs and practical architecture exercises.',
        'duration' => 'Cloud lab training', 'tools' => ['AWS', 'EC2', 'S3', 'IAM', 'VPC'],
        'modules' => ['Cloud concepts', 'IAM', 'Compute and storage', 'Networking', 'Databases', 'Monitoring and deployment'],
        'careers' => ['Cloud Support Associate', 'AWS Associate', 'DevOps Foundation'],
    ],
    'cyber-security' => [
        'title' => 'Best Cyber Security Course in Jaipur', 'short' => 'Cyber Security & Ethical Hacking', 'route' => 'best-cyber-security-course-jaipur.php', 'category' => 'Career / Business',
        'summary' => 'Build a defensive security foundation covering networks, systems, web security and ethical testing in controlled labs.',
        'duration' => 'Lab-oriented security training', 'tools' => ['Linux', 'Networking', 'Web Security', 'Security Tools'],
        'modules' => ['Security fundamentals', 'Networking', 'Linux security', 'Web security', 'Vulnerability assessment', 'Security reporting'],
        'careers' => ['Security Analyst Foundation', 'SOC Analyst Foundation', 'Cyber Security Intern'],
    ],
];

$additionalRoutes = [
    ['Programming / Core', 'Java Programming', 'java-programming-jaipur.php'],
    ['Programming / Core', 'C Programming', 'c-programming-jaipur.php'],
    ['Programming / Core', 'C++ Programming', 'cpp-programming-jaipur.php'],
    ['Programming / Core', 'Programming Fundamentals', 'programming-fundamentals-jaipur.php'],
    ['Programming / Core', 'SQL & Database Programming', 'sql-database-programming-jaipur.php'],
    ['Data / AI', 'Natural Language Processing', 'natural-language-processing-course-jaipur.php'],
    ['Data / AI', 'Computer Vision', 'computer-vision-course-jaipur.php'],
    ['Data / AI', 'Large Language Models', 'large-language-models-course-jaipur.php'],
    ['Data / AI', 'RAG Training', 'rag-training-jaipur.php'],
    ['Data / AI', 'MLOps', 'mlops-course-jaipur.php'],
    ['Data / AI', 'AI Business Analyst', 'ai-business-analyst-course-jaipur.php'],
    ['Web & App', 'Full Stack Development', 'full-stack-development-training-jaipur.php'],
    ['Web & App', 'MERN Stack Development', 'mern-stack-development-course-jaipur.php'],
    ['Web & App', 'React & Next.js', 'react-nextjs-course-jaipur.php'],
    ['Web & App', 'Node.js Backend', 'nodejs-backend-course-jaipur.php'],
    ['Web & App', 'Flutter App Development', 'flutter-app-development-course-jaipur.php'],
    ['Cloud / DevOps', 'Azure Cloud', 'azure-cloud-training-jaipur.php'],
    ['Cloud / DevOps', 'DevOps', 'devops-training-jaipur.php'],
    ['Cloud / DevOps', 'Docker & Kubernetes', 'docker-kubernetes-training-jaipur.php'],
    ['Cloud / DevOps', 'Git & GitHub', 'git-github-course-jaipur.php'],
    ['Career / Business', 'Digital Marketing', 'digital-marketing-course-jaipur.php'],
    ['Career / Business', 'UI/UX Design', 'ui-ux-design-course-jaipur.php'],
    ['Career / Business', 'Advanced Excel', 'advanced-excel-course-jaipur.php'],
    ['Career / Business', 'Tally Prime & GST', 'tally-prime-gst-course-jaipur.php'],
    ['Career / Business', 'Software Testing & QA', 'software-testing-qa-course-jaipur.php'],
];

function bdsi_find_course_by_route(string $route, array $catalog): ?array {
    foreach ($catalog as $key => $course) {
        if ($course['route'] === $route) {
            $course['key'] = $key;
            return $course;
        }
    }
    return null;
}
