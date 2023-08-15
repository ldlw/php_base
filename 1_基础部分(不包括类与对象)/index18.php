<?php
// 数组查询与替换
// array_slice

// $user = ['id' => 101, 'name' => '无忌', 'age' => 20, 'course' => 'js'];
// printf('<pre>%s</pre>', print_r($user, true));
// // 前两个
// $res = array_slice($user, 0, 2);
// printf('<pre>%s</pre>', print_r($res, true));

// // 后两个
// $res = array_slice($user, -2, 2);
// // $res = array_slice($user, -2);
// printf('<pre>%s</pre>', print_r($res, true));

// array_splice
$arr = [10, 28, 9, 33, 56, 21, 82, 47];
printf('<pre>%s</pre>', print_r($arr, true));
// // 第二个位置 删除两个
// $res = array_splice($arr, 1, 2);
// printf('<pre>%s</pre>', print_r($res, true));
// printf('<pre>%s</pre>', print_r($arr, true));

// 更新：第二个位置 删除两个 使用新的数据替换掉
// $res = array_splice($arr, 1, 2, ['hello', 'world']);
// printf('<pre>%s</pre>', print_r($res, true));
// printf('<pre>%s</pre>', print_r($arr, true));

// 添加：第二个位置 删除0个 使用新的数据追加到当前位置的后面
$res = array_splice($arr, 1, 0, ['hello', 'world']);
printf('<pre>%s</pre>', print_r($res, true));
printf('<pre>%s</pre>', print_r($arr, true));

