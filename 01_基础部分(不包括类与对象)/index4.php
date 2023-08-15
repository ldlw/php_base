<?php
// 数据类型

// 基本类型
// int float
// $age = 30;
// $price = 99.20;

// // string
// $username = 'admin';

// // boolean
// $isShow = true;

// 复合类型 数组 对象
// 数组
// $arr = [1,2, 3, true, function() {}, [4,5,6]];

// // 对象基于类
// class Employee {
//   private $salary;

//   public function __construct($salary) {
//     $this->salary = $salary;
//   }

//   public function getSalary() {
//     return $this->salary;
//   }
// }

// $obj = new Employee(123);
// echo '工资是:' . $obj->getSalary() . '<br>'; // 输出 "工资是123"
// echo gettype($obj). '<br>';


// 特殊类型  null 资源
// null 没赋值  unset删除了一个变量
// $x = 123;
// unset($x);
// if (is_null($x)) {
//   echo 'Null';
// }
// echo '<br>';
// $f = fopen('index1.php', 'r');
// echo gettype($f); //resource

// 回调类型 callback
// php用字符串来传递函数 所有可以用任何方式来引用或传递函数 当成值、数据类型
// 表现形式 不仅仅是函数 对象方法 类方法
function hello (string $name): string {
  return 'Hello '  .$name;
}
echo hello('lw'),  '<br>';

// 回调调用函数 同步的
echo call_user_func('hello', 'lw2');

// 函数作为对象方法
class Demo1 {
  public function hello (string $name): string {
    return 'Hello '  .$name;
  }
}
echo '<br>';
// 'hello'是对象方法，用对象访问
// echo call_user_func([对象，方法], 'lw2');
echo call_user_func([(new Demo1), 'hello'], 'lw3');

// 静态
class Demo2 {
  public static function hello (string $name): string {
    return 'Hello '  .$name;
  }
}
echo '<br>';
echo call_user_func(['DEMO2', 'hello'], 'lw4');
