<?php

require __DIR__ .'./helper.php';

// 主流路由解决方案 pathinfo

$url = 'http://php.test/12_router?a=1&b=2';
// p(pathinfo($url));

$url = 'http://php.test/12_router/index.php/one/two/tree?a=1&b=2';
// p(pathinfo($url));

// /one/two/tree
// p($_SERVER['PATH_INFO']);

// 单入口
// index.php/模块/控制器/方法
// index.php/module/controller/action


// 多入口
// 模块/控制器/方法
// 前台 index.php做为入口 不需要模块 controller/action
// 后台 admin.php做为入口 不需要模块 controller/action

$url = 'http://php.test/12_router/index.php/admin/user/index';
p($_SERVER['PATH_INFO']);
p(array_filter(explode('/', $_SERVER['PATH_INFO'])));
p(explode('/', trim($_SERVER['PATH_INFO'], '/')));

$request = explode('/', trim($_SERVER['PATH_INFO'], '/'));
[$module, $controller, $action] = $request;
// echo $module;

// 从pathinfo解析出参数
$url = 'http://php.test/12_router/index.php/admin/user/index/1/admin';
// 1 -> id = 1
// admin -> name = admin
// 按顺序传递参数

$url = 'http://php.test/12_router/index.php/admin/user/index/id/1/name/admin';
// id/1 -> id = 1
// name/admin -> name = admin
// 按键名进行传递

require 'User.php';
// 调用： admin\User::index()

// 类名
$className = $module . '\\' . ucfirst($controller);
p($className);
$params = array_splice($request, 3);
call_user_func_array([$className, $action], $params);
// p($params); 

// Array
// (
//     [0] => 15
//     [1] => admin
// )
// Array
// (
//     [id] => 15
//     [name] => admin
// )

// $arr = array_chunk($params, 2);
// $reulst = [];
// foreach ($arr as $item) {
//   [$key, $value] = $item;
//   $result[$key] = $value;
// }
// p(array_filter($result));

// // 调用User.php的控制器
// call_user_func_array([$className, $action], $result);
