composer --version
composer selfupdate 升级
Use composer self-update --rollback to return to version 2.2.12

composer init
composer install 安装
composer dumpautoload 将json配置(autoload的classmap)下的文件写入autoload_classmap.php

composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/

<!-- 
  autoload 自己的
  require 第三方的 现成的组件库
 -->
<!-- 
  "autoload": {
  "classmap": ["lib/", "src", "app/Test1.php"],
  "files": ["config/database.php", "func/helper.php"],
  "psr-4": {
      "admin\\": "admin/"
  },
  "require": {}
} -->


<!-- composer create-project topthink/think -->
<!-- composer create-project topthink/think blog -->
