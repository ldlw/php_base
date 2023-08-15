<?php
// 发一张好人卡给用户的访问终端
// 好人卡 就是用户使用设备的ID

// 开启一个会话
session_start();

/**
 * 执行两个动作
 * 1.浏览器 PHPSEESION 基于cookie
 * 2.服务器 创建一个与PHPSEESION同名发会话文件(D:\ProgramFiles\phpEnv\temp\php)
 */

 $_SESSION['email'] = 'admin@qq.com';
 $_SESSION['password'] = md5(md5(123456). 'php.cn888');

// 直接将服务器上的文件内容清空
$_SESSION = [];

// 直接将服务器上的会话问价删除
session_destroy();

