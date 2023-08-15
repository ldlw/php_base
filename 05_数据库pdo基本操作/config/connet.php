<?php
namespace pdo_edu;
use PDO;

$dbConfig = require 'database.php';

extract($dbConfig);


$tpl = '%s:host=%s;dbname=%s;port=%s;charset=%s';
$args = [$type, $host, $dbname, $port, $charset];
$dsn = sprintf($tpl, ...$args);

$db = new PDO($dsn, $username, $password);

// 结果集的默认获取模式:
// 设置只要关联部分
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if($db) echo '<h2>连接成功</h2>';