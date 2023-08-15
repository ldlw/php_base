<?php
// 命名空间 必须写在第一行
// namespace ns1;

// require __DIR__ . '/inc/f2.php';

// // 第一个\为了 在父文件找
// echo \ns1\hello('lw').'<br>';

// 一个脚本可以创建多个空间
namespace ns1 {
  const APP = '商场';
  // echo APP. '<br>';
}

// 空间分级管理 子空间
namespace ns2\ns3 {
  const APP = '问答';
  echo APP. '<br>';
}

namespace ns2 {
  const APP = '社区';

  // 非限定名称 总是从当前空间开始查询
  echo APP. '<br>';

  // 完全限定名称 从根空间开始查询
  echo \ns1\APP. '<br>';

  echo \ns2\APP. '<br>';

  // ns2访问ns3
  // 限定名称 ns3\APP
  echo 'ns2访问ns3' . ns3\APP . '<br>';
}

/**
 * 完全限定名称 根空间开始 \a\b\APP 绝对路径
 * 非限定名称 从当前空间开始 'APP' 当前路径
 * 限定名称 子空间 'ns3\APP' 相对路径
 */

 // 全局空间 匿名的
namespace {
  function hello () {
    echo 'hello'. '大家好';
  }

  // 所有的空间都是这的子空间
  echo '全局空间1 '. ns1\APP. '<br>';
  echo '全局空间2 '. ns2\ns3\APP. '<br>';
}
