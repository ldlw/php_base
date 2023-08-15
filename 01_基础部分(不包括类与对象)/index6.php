<?php
// 循环 分支

$arr = [1, 2, 3];
// echo $arr[1];

$i = 0;
// while($i < count($arr)) {
//   echo $arr[$i]. '<br>';
//   $i = $i+1;
// }

// $list = '<ul style="border: 1px solid">';
// while($i < count($arr)) {
//   $list .= "<li> {$arr[$i]} </li>";
//   $i = $i+1;
// }
// $list .= '</ul>';
// echo $list;

// 最少执行一次
// $list = '<ul style="border: 1px solid">';
//   do {
//     $list .= "<li> {$arr[$i]} 55</li>";
//     $i = $i+1;
//   } while($i < count($arr));
// $list .= '</ul>';

// echo $list;

// for ($i = 0; $i < count($arr); $i++) {
//   echo  $arr[$i].'<br>';
// }


for ($i = 0; $i < count($arr); $i++) {
  // 只输出前两个
  // if ($i > 1) break;
  // 跳过中间那个
  if ($i === 1) continue;
  echo  $arr[$i].'<br>';
}
// 1.10