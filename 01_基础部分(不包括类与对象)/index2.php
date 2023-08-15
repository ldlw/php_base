<?php

// echo 'hello,' . [1, 3, 5]  .'<br>';
// echo 'hello,' . implode([1, 3, 5])  .'<br>';
// echo 'hello,' . implode(',', [1, 3, 5])  .'<br>';

// // 只能用在开发调试
// var_dump(10, 'php', [1,2,3], true);
// echo '<br>';

$arr = ['red', 'blue', 'green'];
// var_dump($arr);
// echo '<br>';

// // 只关心值
// print_r($arr);
// echo '<br>';

// // 第二个参数true 不会打印输出 而是返回
// echo '<pre>'. print_r($arr) .'</pre>';
// // 格式化打印
// echo '<pre>'. print_r($arr, true) .'</pre>';
// // 类型
// echo gettype(print_r($arr, true));
// %S sting %d int %f float
// printf('<pre>%s</pre>', print_r($arr, true));

// 只返回不打印
// echo sprintf('<pre>%s</pre>', print_r($arr, true));

// printf('<pre>%s</pre>', print_r($arr, true));
// printf('品名：%S, 单价: %.2f 元, 数量: %d 部<br>', '手机', 5000, 3);
// $arr = ['手机', 5000, 3];
// vprintf('品名：%S, 单价: %.2f 元, 数量: %d 部<br>', $arr);
// 只返回不打印
// echo vsprintf('品名：%S, 单价: %.2f 元, 数量: %d 部<br>', $arr);

$u = 'root';
$p = 'root';

$params = ['mysql', 'localhost', 'phptest', '3306', 'utf8'];
$dsn = vsprintf('%s:host=%s;dbname=%s;port=%s;charset=%s', $params);
echo $dsn;

$pdo = new PDO($dsn, $u, $p);
if ($pdo) echo '<h1>连接成功</h1>';


// $pdo = new PDO($dsn, $u, &p);
