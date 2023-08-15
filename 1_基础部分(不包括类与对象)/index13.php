<?php
// ！字符串 常用函数

// 字符串 转 数组
// $str = 'abcd';
// $arr = str_split($str);
// print_r($arr);

// $str = 'a,b,c,d';
// $arr = explode(',', $str);
// printf('<pre>%s</pre>', print_r($arr, true));

// 数组 转 字符串
// $colors = ['red', 'blue', 'green'];
// echo join(', ', $colors). '<br>';
// echo implode(', ', $colors). '<br>'; 和join相同

// 查询和替换
// $str = 'php.cn';
// // php
// echo substr($str, 0, 3). '<br>';
// // cn 最后n是-1
// echo substr($str, -2, 2). '<br>';

// $img = 'banner.png';
// // .png 拿到点以及后面的
// echo strstr($img, '.'). '<br>';
// // 拿文件名
// echo strstr($img, '.', true). '<br>';

// strpos
// 0 索引
// echo strpos('php.cn', 'p'). '<br>';
// 指定查询起点 从1开始查
// echo strpos('php.cn', 'p', 1). '<br>';
// echo strpos('php.cn', 'p', 3) ? 'ok' : '没找到'. '<br>';

// str_replace
// 带有命名空间的完整的类名
// $class = '\admin\controll\user';
// 实现 '\admin\controll\user' => '/admin/controll/user';
// $path = str_replace('\\', '/', $class);
// echo $path. '<br>';
// include $path 加载

// window \ /都可 linux和macos /
// DIRECTORY_SEPARATOR 自动识别系统的路径分隔符
// $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
// echo $path. '<br>';

// 违禁词
// echo str_replace(['交友', '异性', '带货'], '**', '我用交友软件找了一个会带货的异性女友'). '<br>';
// echo str_replace(['交友', '异性', '带货'], ['JY', 'YX', 'DH'], '我用交友软件找了一个会带货的异性女友'). '<br>';

// 删除指定字符
$str = 'php.cn';
echo strlen($str). '<br>';

$str = '  php.cn  ';
echo strlen($str). '<br>';
echo strlen(trim($str)). '<br>';
$path = '/0421/';
echo $path, '=>', trim($path, '/'). '<br>';
echo $path, '=>', ltrim($path, '/'). '<br>';
echo $path, '=>', rtrim($path, '/'). '<br>';

$tags = '<h1>hello</h1><?php echo "威胁" ?>';
echo strip_tags($tags). '<br>'; // hello

// url相关
// printf('<pre>%s</pre>', print_r($_SERVER, true));
// http://php.test/?a=123&b=456 ==> a=123&b=456
echo $_SERVER['QUERY_STRING']. '<br>';
$arr = explode('&', $_SERVER['QUERY_STRING']);
printf('<pre>%s</pre>', print_r($arr, true));
// queryString 转 数组
parse_str($_SERVER['QUERY_STRING'], $arr);
printf('<pre>%s</pre>', print_r($arr, true));

// 数组 转 查询字符串
$userArr = ['id' => 1, 'username' => 'admin', 'role' => 'manager'];
echo http_build_query($userArr). '<br>';
echo http_build_query($_GET). '<br>';

$url = 'http://php.edu/0421/demo.php?a=123&b=456';
$arr = parse_url($url);
printf('<pre>%s</pre>', print_r($arr, true));
echo parse_url($url)['query'] == $_SERVER['QUERY_STRING'] ? '相等' : '不相等';

