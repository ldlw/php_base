<?php
// 查询操作

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

// 单条查询 会自动next
// PDO::FETCH_ASSOC 结果集只拿关联部分
// $staff = $stmt->fetch(PDO::FETCH_ASSOC);
// printf('<pre>%s</pre>', print_r($staff, true));
// $staff = $stmt->fetch(PDO::FETCH_ASSOC);
// printf('<pre>%s</pre>', print_r($staff, true));

while ($staff = $stmt->fetch()) {
  printf('<pre>%s</pre>', print_r($staff, true));
}