<?php
// 作用域

// php只有函数作用域  没有块作用域
// if (true) {
//   $a = 10;
// }
// echo $a.'<br>'; // 10

// $name = 'lw';
// $hello = function (): string {
//   return 'hello'. $name;
// };
// echo $hello().'<br>'; // 拿不到

//   // 声明要用到的外部变量 global
// $name = 'lw';
// $hello = function (): string {
//   global $name;
//   return 'hello '. $name;
// };
// echo $hello().'<br>';

// use关键字
// $name = 'lw';
// $hello = function () use ($name): string {
//   return 'hello '. $name;
// };
// echo $hello().'<br>';

// 全局变量 $GLOBALS
// $name = 'lw';
// $hello = function () : string {
//   return 'hello '. $GLOBALS['name'];
// };
// echo $hello().'<br>';

$name = 'lw';
$hello = function () : string {
  $name = 'lw2';
  return 'hello '. $name;
};
echo $hello().'<br>';