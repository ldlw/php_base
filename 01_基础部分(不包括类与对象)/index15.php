<?php
// 数组函数

// 与值相关
$arr = [3=>10, 9=>20, 0=>'html', 'id'=>'css', 20=>20, 30];
// printf('<pre>%s</pre>', print_r($arr, true));
// // key重置
// printf('<pre>%s</pre>', print_r(array_values($arr), true));

// // in_array
// var_dump(in_array('css', $arr));

// echo '<hr>';

// // array_search 返回key
// $key = array_search(20, $arr);
// // key取value
// echo $arr[$key]. '<br>';

// array_unique 去重
// printf('<pre>%s</pre>', print_r(array_unique($arr), true));


// 统计
// echo count($arr);

// function sum(...$args) {
//   // return array_reduce($args, function($acc, $cur) {
//   //   return $acc + $cur;
//   // }, 0);
//   return array_sum($args);
// }
// echo sum(1,2,3, 6);

function mul(...$args) {
  // return array_reduce($args, function($acc, $cur) {
  //   return $acc * $cur;
  // }, 1);
  return array_product($args);
}
echo mul(1,2,3);


