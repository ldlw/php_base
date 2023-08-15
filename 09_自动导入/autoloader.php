<?php
spl_autoload_register(function ($class) {
  // 类前缀 通常是包名 thinkphp，think
  $prefix = 'think\\';

  // 类文件约定统一保存到一个固定目录：src
  $baseDir = __DIR__ . '/src/';

  // 去掉包前缀，获取真实类路径
  $realClass = substr($class, strlen($prefix));

  // think\admin\model\User 真实类名是 admin\model\User
  $file = str_replace('\\', DIRECTORY_SEPARATOR, $realClass);
  $file = $baseDir . $file  . '.php';
  file_exists($file) ? require $file : die('文件不存在');
});