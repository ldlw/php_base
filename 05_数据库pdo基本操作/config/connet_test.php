<?php
namespace pdo_edu;
use PDO;

$dbConfig = require 'database.php';

// 将关联数组中的每一个成员 打散成独立变量
extract($dbConfig);

// echo <<< SHOW
// $type;
// $host;
// $dbname;
// $port;
// $charset;
// $username;
// $password;
// SHOW;

$tpl = 'mysql:host=%s;dbname=%s;port=%s;charset=%s';
$args = [$type, $host, $dbname, $port, $charset];
$dsn = sprintf($tpl, ...$args);
// echo $dsn;

$db = new PDO($dsn, $username, $password);
if($db) echo '<h2>连接成功</h2>';