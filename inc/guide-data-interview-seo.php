<?php
return [
  'sql-interview-questions-data-analyst-2026' => [
    'title' => 'SQL Interview Questions for Data Analysts 2026: Beginner to Advanced',
    'description' => 'Prepare for Data Analyst SQL interviews with practical questions on joins, GROUP BY, CTEs, window functions, NULLs, rankings, growth analysis and business scenarios.',
    'category' => 'Interview Preparation',
    'course' => ['label'=>'Build SQL Skills for Data Analytics','url'=>'sql-course-jaipur.php'],
    'sections' => [
      ['Why SQL deserves focused interview preparation','SQL remains one of the most important technical skills for analyst interviews. Preparation should go beyond memorising syntax: practise converting business questions into queries, checking row counts after joins, handling missing values and explaining why your result is trustworthy.'],
      ['Beginner questions: WHERE, HAVING, GROUP BY and NULL','Be ready to explain WHERE versus HAVING, DISTINCT, GROUP BY, aggregate functions and NULL handling. A common exercise is to calculate revenue by category and return only categories above a threshold. Explain that WHERE filters rows before aggregation while HAVING filters aggregated groups.'],
      ['Joins: understand what happens to the grain','Know INNER JOIN and LEFT JOIN well enough to predict which rows survive. Interviewers may give orders and customers tables and ask for customers with no orders. Also practise diagnosing duplicated revenue after a one-to-many join: check key uniqueness, table grain and row counts before trusting SUM results.'],
      ['Intermediate practice: subqueries and CTEs','Practise second-highest values, customers above average spend, repeat purchasers and multi-step transformations. CTEs can make analytical logic easier to explain because you can separate aggregation, filtering and ranking into readable stages.'],
      ['Window functions: ranking, running totals and period comparisons','Learn ROW_NUMBER, RANK, DENSE_RANK, LAG, LEAD and SUM OVER. Typical analyst tasks include top products within each category, month-over-month revenue change, running totals and comparing a row with the previous period. Be able to explain how ties affect your ranking choice.'],
      ['Business scenario: find the top products per category','First aggregate the metric at the correct product-category grain. Then rank products inside each category using a window function and filter the outer result to the required top N. Before writing SQL, clarify whether ties should produce exactly N rows or include every tied product.'],
      ['Business scenario: investigate a revenue drop','Do not jump directly into one query. Clarify the metric definition and comparison period, then segment revenue by dimensions such as channel, region, product or customer type. Check volume and value separately and validate that joins have not duplicated transactions. Finish by explaining what the data shows and what still requires investigation.'],
      ['Common SQL interview mistakes','Frequent mistakes include selecting columns that are not grouped, turning a LEFT JOIN into an INNER JOIN with an unintended WHERE filter, ignoring NULLs, using the wrong date boundary, double-counting after joins and choosing ROW_NUMBER when ties matter. State assumptions before coding when the question is ambiguous.'],
      ['A practical seven-day revision plan','Day 1 revise filtering and aggregation; Day 2 practise joins; Day 3 solve subqueries and CTEs; Days 4 and 5 focus on window functions and date analysis; Day 6 solve business scenarios without looking at solutions; Day 7 conduct a timed mock interview and explain every query aloud.'],
      ['What to say after your query works','A strong analyst does not stop at valid syntax. Explain the table grain, assumptions, tie behaviour, NULL treatment and one validation check. For a business question, translate the output into a short finding while avoiding causal claims the query cannot prove.']
    ],
    'faqs' => [
      ['Which SQL topics are most important for Data Analyst interviews?','Prioritise filtering, aggregation, GROUP BY and HAVING, joins, subqueries, CTEs, date functions and window functions such as ROW_NUMBER, RANK, LAG and running totals.'],
      ['Are window functions important for Data Analyst interviews in 2026?','Yes. Ranking within groups, period-over-period comparisons and running totals are common analytical patterns, so candidates should understand window functions rather than only basic SELECT queries.'],
      ['How should a fresher practise SQL interview questions?','Start with fundamentals, then solve multi-table business questions. After each query, explain the table grain, assumptions and validation checks aloud as if an interviewer were reviewing the result.'],
      ['Should I memorise SQL interview answers?','Memorising syntax alone is fragile. Learn reusable patterns and practise translating unfamiliar business questions into steps, because interviews often change table names, metrics and constraints.']
    ]
  ]
];
