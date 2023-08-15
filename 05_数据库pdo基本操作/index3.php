<?php
// 更新操作

namespace pdo_edu;

use PDO;

// 连接数据库
require __DIR__ . '/config/connet.php'; 

// UPDATE
// UPDATE 表名 SET 字段1= 值1,字段2= 值2,... WHRERE 更新条件
$sql = 'UPDATE `staff` SET `name` = ? where `id` = ?';

// 1.创建sql语句模板
$stmt = $db -> prepare($sql);

$stmt->execute(['老顽童', 3]);

if ($stmt->rowCount() > 0) {
  echo '更新成功';
} else {
  echo '更新失败';
  print_r($stmt -> erroInfo());
}