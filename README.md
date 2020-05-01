# InputSecurityChecker
This tools to avoid any xss attack and others Top 10 Web Application Security Risks

Frist Avoid SQl Injection use this Steps

- Use PDO Connection 
- Use filter_input() To filter Input from any Injection 
Example :
=========
$pdo = new PDO('sqlite:/path/db/users.db');

$stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); // <-- قم بترشيح بياناتك أولاً (أنظر [ترشيح البيانات](#data_filtering))، مهم جداً خصوصاً لعمليتي INSERT و UPDATE..
$stmt->bindParam(':id', $id, PDO::PARAM_INT); // <-- تلقائياً يتم تعقيم القيم بٱستخدام PDO
$stmt->execute();
========
