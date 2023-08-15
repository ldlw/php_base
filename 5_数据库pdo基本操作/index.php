<?php
// 查询操作 全部

namespace pdo_edu;

use PDO;

// 连接数据库
require __DIR__ . '/config/connet.php'; 

// SELECT 字段列表 FROM 表名 WHERE 查询条件
$sql = 'SELECT `id`, `name` FROM `staff` WHERE `id` > :id ';
echo $sql;
// 1.创建sql语句模板
$stmt = $db -> prepare($sql);

$stmt->execute(['id' => 8]);
$staffs = $stmt->fetchAll();

foreach ($staffs as $staff) {
  printf('<pre>%s</pre>', print_r($staff, true));
}

