<?php
// 常量

define('USER_NAME', 'admin');
const EMAIL ='49855@qq.com';

function hello (): string {
  return sprintf('Hello , %s, (%s)', USER_NAME, EMAIL);
}
echo hello().'<br>';

/**
 * 1、常量默认就是全局的
 * 2、define 可以用在if中 但不能用在class中
 * 3、const 编译阶段处理 速度最快 必须写到作用域的顶部 适合声明类常量 不能用在if中
 */ 

define('', 'php中文');
// '' 变量名也合法
echo ''.'<br>';
// 使用一个函数来获取
echo constant('').'<br>';
// 预定义常量
echo 'php版本 '. PHP_VERSION.'<br>';
echo 'php os '. PHP_OS.'<br>';

/**
 * 常量二特征
 * 1、必须要有一个确定的值
 * 2、不能更新
 * 魔术常量： 总是有一个特定的值，但是用户不能更新，系统来维护
 */
echo '当前行号 '. __LINE__ .'<br>';
echo '当前文件 '. __FILE__ .'<br>';
echo '当前文件路径 '. __DIR__ .'<br>';