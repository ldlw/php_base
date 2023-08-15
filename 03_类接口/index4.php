<?php
/**
 * 类的扩展 抽象 最终
 * protected 受保护的/可以继承的
 * extends 扩展/继承
 * parent 父类
 * abstract 抽象
 * final 最终类
 */ 

class Person {
  protected $name;
  private $id = 123;
  public function __construct($name) {
    $this->name = $name;
  }
  protected function getInfo() {
    return $this->name;
  }
}

class Stu extends Person {
  // 属性扩展
  private $lesson;
  private $score;

  // 方法扩展/重写
  public function __construct($name, $lesson, $score) {
    // $this->name = $name;
    parent::__construct($name);
    $this->lesson = $lesson;
    $this->score = $score;
  }

  // 这里只能更宽松
  public function getInfo() {
    // return $this->name. "同学: ($this->lesson: $this->score 分)";
    return parent::getInfo(). "同学: ($this->lesson: $this->score 分)";
  }
}

$stu = new Stu('小狗', '数学', 90);
echo $stu->getInfo();

echo '<hr>';

// var_dump 只打印属性
$person = new Person('小猪');
var_dump($person);

// 如果不想让用户直接使用父类 必须继承或者扩展间接使用
// 将父类声明为一个抽象类, 不能new
abstract class Demo1 {}
class Demo2 extends Demo1 {}
echo 'demo2的父类是'. get_parent_class(new Demo2);

echo '<hr>';

// 抽象方法 只有方法名,参数列表 没有具体实现(大括号)
// 有抽象方法 这个类必须是抽象类
abstract class Demo3 {
  abstract protected function hello($name);
}

class Demo4 extends Demo3 {
  public function hello($name) {
    return 'Hello' .$name;
  }
}
echo call_user_func([new Demo4, 'hello'], '牛老师');

final class DEMO5 {

}
// 不能被继承
// class Demo6 extends Demo5 {
// }