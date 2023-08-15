<?php
// COOKIE 客户端保存用户信息

setcookie('username', 'lw', time() + 60, '/');
echo $_COOKIE['username'] . '<br>';
$_COOKIE['username']  = 'admin';
echo $_COOKIE['username'] . '<br>';
$_COOKIE['username'] = null;
unset($_COOKIE['username']);
echo $_COOKIE['username'] ?? '没找到' . '<br>';

// 实际工作中 为了用户数据的安全 应该将用户资料保存到服务器上


