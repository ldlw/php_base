<?php
// 数组

// 索引
// $arr = [1,2,3];
// printf('<pre>%s</pre>', print_r($arr, true));

// 关联数组
// $user = ['0' => '苹果','1' => '香蕉','2' => '橘子','3' => '李子'];
// printf('<pre>%s</pre>', print_r($user, true)); 
// echo $user['1'].'<br>';

$users = [
  0 => ['id' => 5, 'name' => "lw", 'gender' => 0, 'age' => 18],
  1 => ['id' => 6, 'name' => "lw1", 'gender' => 2, 'age' => 28],
  2 => ['id' => 8, 'name' => "lw2", 'gender' => 4, 'age' => 38]
];

$table = '<table border="1" width="800" cellspacing="0" cellpadding="3" align="center">';
$table .= '<caption>用户信息表</caption>';
$table .= '<thead><tr><th>id</th><th>用户名</th><th>性别</th><th>年龄</th></tr><thead>';
$table .= '<tbody>';
// 遍历二维数组
// foreach ($users as $key => $value) {
foreach ($users as $user) {  
  // print_r($user);
  $table .= '<tr>';
  $table .= '<td>' .$user['id']. '</td>';
  $table .= '<td>' .$user['name']. '</td>';
  $table .= '<td>' .($user['gender'] ? '女' : '男'). '</td>';
  $table .= '<td>' .$user['age']. '</td>';
  $table .= '</tr>';
}

$table .= '</tbody></table>';

echo $table;