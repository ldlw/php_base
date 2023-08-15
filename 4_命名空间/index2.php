<?php
// 命名空间 解决全局成员命名冲突问题

// 文件名相同 路径不同 不是同一个文件

require __DIR__ . '/inc/f1.php';
echo hello();

// 函数 属于全局成员 不能重复定义
// 常量 属于全局成员 不能重复定义
// 类、接口属 于全局成员 不能重复定义

// function hello() {
//   return __FUNCTION__;
// }

// const APP = '社区';
// echo APP;

// class Demo {
  
// }

interface A {
  
}