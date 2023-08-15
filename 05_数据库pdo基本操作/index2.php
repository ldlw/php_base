<?php

namespace pdo_edu;

// use PDO as PDO;
use PDO;

// 连接数据库
require __DIR__ . '/config/connet.php'; 

// CRUD
/**
 * 读操作 select
 * 写操作 insert update delete
 */

/**
 * PDO预处理
 * 为什么要预处理
 * 1、防止SQL注入攻击 2、数据延迟绑定
 * (编程只写sql语句模板，执行sql时再给占位符绑定真实数据)
 * 预处理过程
 * 1、创建sql语句模板对象 2、执行sql语句(写/读) 返回结果集 写返回受影响的记录数量
 */

// INSERT
// INSERT 表名 SET 字段1= 值1,字段2= 值2,...
// INSERT INTO table (字段列表) VALUES (值列表)
// 推荐规范 
// 1、关键字全大写 
// 2、表名，字段名使用反引号作为定界符
$sql = 'INSERT `staff` SET `name` = ? ,`sex` = ?, `email` = ?';

// 1.创建sql语句模板
$stmt = $db -> prepare($sql);

// 2.执行sql语句
// if ($stmt->execute(['杨过', 0, 'yangguo@php.cn'])) {
//   // 成功
//   // $stmt->rowCount() 返回受影响的记录数量
//   if ($stmt->rowCount() > 0) {
//     echo '新增成功, 新增记录的主键ID ='. $db->lastInsertId();
//   } else {
//     echo '新增失败';
//     print_r($stmt -> erroInfo());
//   }
// } else {
//   echo '执行错误';
//   print_r($stmt -> erroInfo());
// }

$stmt->execute(['黄蓉', 1, 'hqg@php.cn']);
$stmt->execute(['杨过', 0, 'xln@php.cn']);
$stmt->execute(['朱老师', 0, 'gj@php.cn']);
$stmt->execute(['朱老师', 0, 'gj@php.cn']);
$stmt->execute(['灭绝师太', 0, 'gj@php.cn']);

if ($stmt->rowCount() > 0) {
  echo '新增成功, 新增记录的主键ID ='. $db->lastInsertId();
} else {
  echo '新增失败';
  print_r($stmt -> erroInfo());
}


// 关闭连接[可选]
// $db = null;
// unset($db)