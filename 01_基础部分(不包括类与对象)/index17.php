<?php
// 排序

// 值排序
// $arr = [30, 2, 40, 90, 'abc', 'helo', 1, 46];
// printf('原始:<pre>%s</pre>', print_r($arr, true));

// // 升序
// // sort($arr);
// // 确保key不变
// asort($arr);
// printf('升序:<pre>%s</pre>', print_r($arr, true));

// // 降序
// rsort($arr); // arsort
// printf('降序:<pre>%s</pre>', print_r($arr, true));

// ----------------

// 键排序
$arr = ['e' => 10, 'a' => 30, 'p' => 50];
// 升序
// ksort($arr);
// // // 降序
// // krsort($arr);
// printf('升序:<pre>%s</pre>', print_r($arr, true));

// 乱序
$blue = range(1, 16);
shuffle($blue);
printf('<pre>%s</pre>', print_r($blue , true));
