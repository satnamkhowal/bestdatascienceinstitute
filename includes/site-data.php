<?php
/**
 * Best Data Science Institute shared site configuration.
 * Public course routes use the same clean, top-level slug pattern used by Forsk Coding School.
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
        'title'=>'Python Programming Course in Jaipur','short'=>'Python Programming','slug'=>'python-course-jaipur','route'=>'/python-course-jaipur/','category'=>'Programming / Core',
        'summary'=>'Build strong Python fundamentals with hands-on coding, problem solving, APIs, files, databases and practical mini projects.','duration'=>'Instructor-led practical training','tools'=>['Python','VS Code','Git','Jupyter'],
        'modules'=>['Python fundamentals and environment setup','Data types, operators and control flow','Functions, modules and packages','Object-oriented programming','Files, exceptions and debugging','APIs, JSON and database basics','Git workflow and practical projects'],
        'careers'=>['Python Developer','Automation Developer','Data/AI Foundation'],
    ],
    'data-science-ai' => [
        'title'=>'Data Science with Artificial Intelligence Course in Jaipur','short'=>'Data Science with AI','slug'=>'data-science-course-jaipur','route'=>'/data-science-course-jaipur/','category'=>'Data / AI',
        'summary'=>'Learn Python, statistics, data analysis, machine learning and modern AI workflows through practical datasets and portfolio projects.','duration'=>'Career-focused instructor-led program','tools'=>['Python','Pandas','Scikit-learn','SQL','Power BI'],
        'modules'=>['Python for data work','Statistics and probability','NumPy and Pandas','Data cleaning and exploratory analysis','SQL for analytics','Visualization and dashboards','Machine learning foundations','Model evaluation and improvement','Generative AI foundations','Capstone project and interview preparation'],
        'careers'=>['Data Scientist','Junior ML Engineer','Data Analyst','AI Associate'],
    ],
    'data-analytics' => [
        'title'=>'Data Analytics Course in Jaipur','short'=>'Data Analytics','slug'=>'data-analytics-course-jaipur','route'=>'/data-analytics-course-jaipur/','category'=>'Data / AI',
        'summary'=>'Master Excel, SQL, Power BI, Python and business-focused analytics with dashboards, case studies and real datasets.','duration'=>'Practical analytics training','tools'=>['Excel','SQL','Power BI','Python'],
        'modules'=>['Excel for analytics','Data cleaning and preparation','SQL querying and joins','Statistics for business decisions','Power BI dashboards and DAX','Python analytics with Pandas','Case studies and portfolio projects','Interview and resume preparation'],
        'careers'=>['Data Analyst','Business Analyst','BI Analyst','MIS Analyst'],
    ],
    'web-development' => [
        'title'=>'Web Development Course in Jaipur','short'=>'Web Development','slug'=>'web-development-course-jaipur','route'=>'/web-development-course-jaipur/','category'=>'Web & App',
        'summary'=>'Learn modern frontend and backend foundations by building responsive websites and deployable web projects.','duration'=>'Project-based training','tools'=>['HTML','CSS','JavaScript','Git','Backend Basics'],
        'modules'=>['HTML and semantic web','Responsive CSS and Bootstrap','JavaScript fundamentals','DOM and browser APIs','Backend and database basics','Git, deployment and live projects'],
        'careers'=>['Web Developer','Frontend Developer','Junior Full Stack Developer'],
    ],
    'generative-ai' => [
        'title'=>'Generative AI Course in Jaipur','short'=>'Generative AI','slug'=>'generative-ai-course-jaipur','route'=>'/generative-ai-course-jaipur/','category'=>'Data / AI',
        'summary'=>'Understand LLMs, prompt engineering, embeddings, RAG and practical generative AI application development.','duration'=>'Applied AI training','tools'=>['Python','LLMs','Embeddings','RAG','APIs'],
        'modules'=>['Generative AI and LLM foundations','Prompt design and evaluation','LLM APIs and structured outputs','Embeddings and vector search','RAG application patterns','Safety, evaluation and cost control','Practical GenAI application project'],
        'careers'=>['GenAI Developer','AI Application Developer','AI Automation Associate'],
    ],
    'agentic-ai' => [
        'title'=>'Agentic AI & AI Agents Course in Jaipur','short'=>'AI Agent & Agentic AI','slug'=>'agentic-ai-course-jaipur','route'=>'/agentic-ai-course-jaipur/','category'=>'Data / AI',
        'summary'=>'Build tool-using AI agents and multi-step automation workflows with practical orchestration and evaluation patterns.','duration'=>'Advanced applied AI training','tools'=>['Python','LLM APIs','Tools','RAG','Automation'],
        'modules'=>['Agentic AI foundations','Tool/function calling','Planning and task decomposition','Memory and retrieval patterns','Multi-agent workflow basics','Guardrails and evaluation','Agent automation capstone'],
        'careers'=>['AI Automation Developer','Agentic AI Developer','Applied AI Engineer'],
    ],
    'power-bi' => [
        'title'=>'Power BI Course in Jaipur','short'=>'Power BI','slug'=>'power-bi-course-jaipur','route'=>'/power-bi-course-jaipur/','category'=>'Data / AI','summary'=>'Build business dashboards, data models and DAX measures for practical reporting and decision-making.','duration'=>'Dashboard-focused training','tools'=>['Power BI','Power Query','DAX','Excel'],'modules'=>['Data import and Power Query','Data modeling','DAX measures','Interactive dashboards','Publishing and project work'],'careers'=>['Power BI Developer','BI Analyst','Data Analyst'],
    ],
    'machine-learning' => [
        'title'=>'Machine Learning Course in Jaipur','short'=>'Machine Learning','slug'=>'machine-learning-course-jaipur','route'=>'/machine-learning-course-jaipur/','category'=>'Data / AI','summary'=>'Learn supervised and unsupervised machine learning, preprocessing, model evaluation and deployment foundations.','duration'=>'Hands-on ML training','tools'=>['Python','Scikit-learn','Pandas','Jupyter'],'modules'=>['ML workflow','Regression','Classification','Clustering','Feature engineering','Model evaluation','Capstone project'],'careers'=>['ML Associate','Data Scientist','AI/ML Intern'],
    ],
    'deep-learning' => [
        'title'=>'Deep Learning Course in Jaipur','short'=>'Deep Learning','slug'=>'deep-learning-course-jaipur','route'=>'/deep-learning-course-jaipur/','category'=>'Data / AI','summary'=>'Study neural networks, CNNs, sequence models and transfer learning through practical deep learning projects.','duration'=>'Advanced AI training','tools'=>['Python','TensorFlow/Keras','Jupyter'],'modules'=>['Neural network foundations','Training and optimization','CNNs','Sequence models','Transfer learning','Applied project'],'careers'=>['Deep Learning Associate','AI Engineer','Computer Vision/NLP Foundation'],
    ],
    'aws' => [
        'title'=>'AWS Cloud Course in Jaipur','short'=>'AWS Cloud','slug'=>'aws-course-jaipur','route'=>'/aws-course-jaipur/','category'=>'Cloud / DevOps','summary'=>'Learn cloud fundamentals and core AWS services with deployment-oriented labs and practical architecture exercises.','duration'=>'Cloud lab training','tools'=>['AWS','EC2','S3','IAM','VPC'],'modules'=>['Cloud concepts','IAM','Compute and storage','Networking','Databases','Monitoring and deployment'],'careers'=>['Cloud Support Associate','AWS Associate','DevOps Foundation'],
    ],
    'cyber-security' => [
        'title'=>'Cyber Security Course in Jaipur','short'=>'Cyber Security & Ethical Hacking','slug'=>'cyber-security-course-jaipur','route'=>'/cyber-security-course-jaipur/','category'=>'Career / Business','summary'=>'Build a defensive security foundation covering networks, systems, web security and ethical testing in controlled labs.','duration'=>'Lab-oriented security training','tools'=>['Linux','Networking','Web Security','Security Tools'],'modules'=>['Security fundamentals','Networking','Linux security','Web security','Vulnerability assessment','Security reporting'],'careers'=>['Security Analyst Foundation','SOC Analyst Foundation','Cyber Security Intern'],
    ],
];

$additionalRoutes = [
    ['Programming / Core','Java Programming','/java-course-jaipur/'],
    ['Programming / Core','C Programming','/c-programming-course-jaipur/'],
    ['Programming / Core','C++ Programming','/cpp-programming-course-jaipur/'],
    ['Programming / Core','Programming Fundamentals','/programming-fundamentals-course-jaipur/'],
    ['Programming / Core','SQL & Database Programming','/sql-course-jaipur/'],
    ['Data / AI','Natural Language Processing','/nlp-course-jaipur/'],
    ['Data / AI','Computer Vision','/computer-vision-course-jaipur/'],
    ['Data / AI','Large Language Models','/llm-course-jaipur/'],
    ['Data / AI','RAG Training','/rag-course-jaipur/'],
    ['Data / AI','MLOps','/mlops-course-jaipur/'],
    ['Data / AI','AI Business Analyst','/ai-business-analyst-course-jaipur/'],
    ['Web & App','Full Stack Development','/full-stack-development-course-jaipur/'],
    ['Web & App','MERN Stack Development','/mern-stack-course-jaipur/'],
    ['Web & App','React & Next.js','/react-nextjs-course-jaipur/'],
    ['Web & App','Node.js Backend','/nodejs-course-jaipur/'],
    ['Web & App','Flutter App Development','/flutter-course-jaipur/'],
    ['Cloud / DevOps','Azure Cloud','/azure-course-jaipur/'],
    ['Cloud / DevOps','DevOps','/devops-course-jaipur/'],
    ['Cloud / DevOps','Docker & Kubernetes','/docker-kubernetes-course-jaipur/'],
    ['Cloud / DevOps','Git & GitHub','/git-github-course-jaipur/'],
    ['Career / Business','Digital Marketing','/digital-marketing-course-jaipur/'],
    ['Career / Business','UI/UX Design','/ui-ux-design-course-jaipur/'],
    ['Career / Business','Advanced Excel','/advanced-excel-course-jaipur/'],
    ['Career / Business','Tally Prime & GST','/tally-prime-gst-course-jaipur/'],
    ['Career / Business','Software Testing & QA','/software-testing-course-jaipur/'],
];

function bdsi_find_course_by_slug(string $slug, array $catalog): ?array {
    foreach ($catalog as $key => $course) {
        if (($course['slug'] ?? '') === $slug) { $course['key'] = $key; return $course; }
    }
    return null;
}
function bdsi_find_additional_by_slug(string $slug, array $routes): ?array {
    foreach ($routes as [$group,$label,$route]) {
        if (trim($route,'/') === $slug) return ['title'=>$label . ' Course in Jaipur','short'=>$label,'slug'=>$slug,'route'=>$route,'category'=>$group,'summary'=>'Practical, instructor-led training with guided exercises, project work and career-focused learning.','duration'=>'Instructor-led practical training','tools'=>[$label,'Practical Labs','Projects'],'modules'=>['Core concepts and foundations','Guided practical exercises','Tools and workflow','Applied mini projects','Capstone and interview preparation'],'careers'=>[$label . ' related entry-level roles','Technology support roles']];
    }
    return null;
}
