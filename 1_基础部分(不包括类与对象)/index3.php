<?php
$username = 'lw';

$myname = $username;

$myname = 'lw2';

echo $myname. '<br>';;

// 值传递
echo $myname === $username ? '相等' : '不相等'. '<br>';

// 引用传递 给原变量起来个别名
$youname = &$username;

$youname = '妞妞';
echo $youname === $username ? '相等' : '不相等'. '<br>';

