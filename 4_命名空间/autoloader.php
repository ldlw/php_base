<?php

// require __DIR__ . '/php/cn/demo7.php';
// require __DIR__ . '/php/cn/demo8.php';

// 自动加载
// 注册一个类的自动加载器
spl_autoload_register(function ($class) {
  // 1、将命名空间=>映射到一个类文件的绝对路径
  $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);

  // 2、生成类文件路径
  $file = __DIR__ .DIRECTORY_SEPARATOR .$path . '.php';
  
  // 3、加载这个类文件
  require $file;
});