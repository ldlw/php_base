<?php
// 栈与队 一个增删元素受阻的数组(线性表)

// $arr = [1, 2, 3];

// 栈操作 仅限在尾部进行增删
// $stack = [];
// array_push($stack, 10);
// printf('<pre>%s</pre>', print_r($stack, true));
// array_push($stack, 20, 30);
// printf('<pre>%s</pre>', print_r($stack, true));
// array_pop($stack);
// printf('<pre>%s</pre>', print_r($stack, true));

// // 栈操作 仅限在头部进行增删
// array_unshift($stack, 50, 60);
// printf('<pre>%s</pre>', print_r($stack, true));
// array_shift($stack);
// printf('<pre>%s</pre>', print_r($stack, true));

// 队操作 尾部添加 头部删除
$queue = [];
// 入队
array_push($queue, 10, 20, 30);
printf('<pre>%s</pre>', print_r($queue, true));
// 出队
array_shift($queue);
printf('<pre>%s</pre>', print_r($queue, true));

// 头部添加 尾部删除
// array_unshift array_pop