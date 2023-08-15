<?php
// ！再谈数组遍历


$user = ['id' => 5, 'name' => "lw", 'course' => 'js', 'age' => 18];

// 指针遍历
// printf('[%s]=>%s<br>', key($user), current($user));
// // 后移
// next($user);
// // 前移
// prev($user);
// printf('[%s]=>%s<br>', key($user), current($user));
// // 复位 第一个
// reset($user);
// // 最后
// end($user);

// 自动遍历
// if (count($user) > 0) {
//   while(true) {
//     printf('[%s]=>%s<br>', key($user), current($user));
//     if (next($user)) continue;
//     else break;
//   }
// } else {
//   echo '空数组';
// }

// foreach 快捷遍历 还能遍历数组
// foreach ($user as $key => $value) {
//   printf('[%s]=>%s<br>', $key, $value);
// }

// 解构遍历
// list不是函数 因为函数不能放在等号左边 属于语法结构

// 索引数组
list($id, $name) = [10, 'tony'];
printf('$id = %s, $name = %s<br>', $id, $name);

list('id' =>$id, 'name' => $name) = ['id' => 10, 'name' => 'tony'];
printf('$id = %s, $name = %s<br>', $id, $name);

echo '<hr>';

// 解构通常用来遍历二维或者以上的数组
$users = [
  0 => ['id' => 5, 'name' => "lw", 'course' => 'js', 'age' => 18],
  1 => ['id' => 9, 'name' => "lw4", 'course' => 'js', 'age' => 18],
  2 => ['id' => 6, 'name' => "lw1", 'course' => 'php', 'age' => 28],
  3 => ['id' => 8, 'name' => "lw2", 'course' => 'java', 'age' => 38]
];
foreach ($users as list('id' =>$id, 'name' => $name)) {
  printf('$id = %s, $name = %s<br>', $id, $name);
}



