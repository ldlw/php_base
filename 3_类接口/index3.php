<?php
// 类成员
// private 私有 仅限自己
// protected 继承 本类或者子类
// public 公共 默认

// 静态成员
// static 静态属性 静态方法
// 与类实例无关 静态成员 不要用$this
// 内部用self 外部用类名

class User1 {
  // 属性 访问限制符 类成员声明
  private $username;
  // 方法

  // 魔术方法 系统来调用 用户不能直接调用
  // 构造方法 实例化自动调用
  public function __construct(string $username) {
    $this->username = $username;
  }

  // 自定义方法
  public function getUserName () {
    // $obj = new User1;
    // -> 对象成员访问符
    // return $obj->$username;
    // 当前实例的引用 $this 与实例绑定的
    return $this->username;
  }
}
$user1 = new User1('liuwei');
echo $user1 ->getUserName();

echo '<hr>';

class User2 {
  private static $username = 'admin';

  // 类常量 用类访问
  const APP = '商场';

  public static function getUserName () {
    // return User2::$username;
    // 功能与$this类似
    return self::$username;
  }
}

// 实例访问是一个兼容bug，能成功 不建议用
// echo (new User2)->getUserName();
echo User2::getUserName().'<br>';
echo User2::APP;