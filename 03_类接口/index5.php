<?php
// 接口 大号的抽象类
// 接口所有成员 必须是抽象
// interface 声明接口
// implements 实现接口

interface iUser {
  // 类常量
  const NOTION = 'CHINA';

  // 必须是抽象 必须是public
  public function m1();
  public function m2();
  // 官方手册 不建议声明抽象类构造方法
}

// 接口要用类来实现它
// 普通类来显示 必须将接口所有抽象方法全部实现
class Demo1 implements iUser {
  public function m1() {

  }
  public function m2() {

  }
}

// 允许有不实现的抽象成员
abstract class Demo2 implements iUser {
  public function m1() {

  }
}

// php默认只支持单继承
// class A extends B, C

// 可以通过接口 间接实现多继承
interface A {}
interface B {}
interface C {}

class Test implements A,B,C {

}

// 查看当前类实现的所有接口
$arr = class_implements('Test');
printf('<pre>%s</pre>', print_r($arr, true));