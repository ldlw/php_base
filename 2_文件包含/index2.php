<?php
// 文件包含

// 本质:将目标文件复制过来 被包含文件共享作用域

// include
// 绝对路径
include __DIR__.'/inc/f1.php';
echo $username.'<br>';
// echo $email.'<br>';
$email = include __DIR__.'/inc/f1.php';
echo $email.'<br>';

echo '<hr>';

// require
require __DIR__.'/inc/f1.php';
echo $username.'<br>';
// echo $email.'<br>';
$email = require __DIR__.'/inc/f1.php';
echo $email.'<br>';

// 区别1
// include 用的时候再加载 动态
// require 应该写到顶部 静态

// if (false) include __DIR__.'/inc/f2.php';
// echo site.'<br>';

// if (false) require __DIR__.'/inc/f2.php';
// echo site.'<br>';

// 区别2
// include 加载失败 继续执行不终端
// require 加载失败 中断退出

// @ 屏蔽报错
// @include __DIR__.'/inc/hello1.php';
// echo 'include后面的代码'.'<br>';

// 不存在会报错
// require __DIR__.'/inc/hello1.php';
// echo 'include后面的代码'.'<br>';

// include_once 只包含一次
// require_once 只包含一次