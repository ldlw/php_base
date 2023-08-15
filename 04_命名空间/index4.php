<?php
// 实际工作中的定义

// 一个脚本可以创建多个空间
namespace ns1;
  const APP = '商场';

// 空间分级管理 子空间
namespace ns2\ns3;
  const APP = '问答';
  echo APP. '<br>';

namespace ns2;
  const APP = '社区';

  // 非限定名称 总是从当前空间开始查询
  echo APP. '<br>';

  // 完全限定名称 从根空间开始查询
  echo \ns1\APP. '<br>';

  echo \ns2\APP. '<br>';

  // ns2访问ns3
  // 限定名称 ns3\APP
  echo 'ns2访问ns3' . ns3\APP . '<br>';

// 不能定义全局了  
