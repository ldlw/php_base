<?php
// 删除操作

namespace pdo_edu;

use PDO;

// 连接数据库
require __DIR__ . '/config/connet.php'; 

// DELETE
// DELETE FROM 表名  WHRERE 更新条件
// '?' 匿名占位符
$sql = 'DELETE FROM `staff` where `id` = ? ';
// 'string'  命名占位符 
$sql = 'DELETE FROM `staff` where `id` = :id ';

// 1.创建sql语句模板
$stmt = $db -> prepare($sql);

$stmt->execute([':id' => 3]);

if ($stmt->rowCount() > 0) {
  echo '删除成功';
} else {
  echo '删除失败';
  print_r($stmt -> erroInfo());
}