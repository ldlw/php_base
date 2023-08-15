<?php
// 数组回调函数
// 回头再调用 依赖一个外部条件

// 过滤器
// 仅返回数组中true的元素集合
// [],
// null,
// false,
// '',
// 0,
// '0' 都是false
$arr = [
  150,
  'php',
  1,
  [4,5,6],
  (new class {}),
  [],
  null,
  false,
  '',
  0,
  '0'
];
// $res = array_filter($arr);
// printf('<pre>%s</pre>', print_r($res, true));

// 标量：单值
// $res = array_filter($arr, function($item) {
//   if ($item) {
//     return is_scalar($item);
//   }
// });
// printf('<pre>%s</pre>', print_r($res, true));

// map
$arr = ['php', [3, 4, 5], (new class{
  public $name = '电脑';
  public $price = 888;
}), 15, 20];
printf('<pre>%s</pre>', print_r($arr, true));

// 转为
// Array
// (
//     [0] => php
//     [1] => '3, 4, 5'
//     [2] => '电脑, 888'
//     [3] => 15
//     [4] => 20
// )
$res = array_map(function ($item) {
  switch(gettype($item)) {
    case 'array':
      $item = join(',', $item);
      break;
    case 'object':
      $item = join(',', get_object_vars($item));
      break;
  }
  return $item;
}, $arr);
printf('<pre>%s</pre>', print_r($res, true));

// 归并
$arr = [10, 20, 30];
$res = array_reduce($arr, function($acc, $cur) {
  echo $acc . ',' .$cur . '<br>';
  return $acc + $cur;
}, 0);

echo '<hr>';

// array_walk 对数组成员进行格式化 数组指针对它无效
$user = ['id' => 10, 'name' => 'admin', 'emial' => 'admin@php.cn'];
array_walk($user, function ($value, $key, $color) {
  printf('[%s] => <span style="color: %s">%s </span>', $key, $color, $value);
}, 'blue');




