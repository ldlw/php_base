<?php

require __DIR__ .'./helper.php';

// get请求 从查询字符串中解析出控制 方法 参数
// parse_url
// $url = 'http://php.test/12_router?a=1&b=2';
// p(parse_url($url)['query']);

// // $_SERVER['REQUEST_URI']
// p($_SERVER['REQUEST_URI']);
// p(parse_url($_SERVER['REQUEST_URI'])['query']);

// // 最简单的方式
// p($_SERVER['QUERY_STRING']);

// 转换成数组
parse_str($_SERVER['QUERY_STRING'], $params);
// p($params);

// 过滤空值
p(array_filter($params));
$params = array_filter($params);

echo "<hr>";

// 路由测试
class UserController {
  public static function hello($id='1', $name='lw') {
    return "<h3>hello id=$id, name=$name</h3>";
  }
}

// 约定get参数中
// c控制器
// a方法
// UserController c=user&a=hello
$controller = ucfirst(array_shift($params)) . 'Controller';
$action = array_shift($params);
p($controller, $action);
echo call_user_func_array([$controller, $action], $params);