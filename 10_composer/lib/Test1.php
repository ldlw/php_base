<?php
// PSR_4: 命名空间与类文件所在目录进行映射
namespace ns3;

class Test1Class {
  public static function show() {
    return '当前类名:' . __CLASS__;
  }
}