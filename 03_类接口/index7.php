<?php
// 属性重载 __get() __set()
// 方法属性 __call() __callStatic()

class User {

  private $data = [
    'name' => 'lw',
    'age' => 20
  ];

  // 查询拦截器
  public function __get($name) {
    if (array_key_exists($name, $this->data)) {
      return $this->data[$name];
    }
    return "属性${name}不存在";
  }

  // 更新拦截器
  public function __set($name, $value) {
    // 有没有这个属性 
    if (array_key_exists($name, $this->data)) {
      // 这个值是不是合法
      if ($name === 'age') {
        if ($value >= 18 && $value <= 59) {
          $this->data[$name] = $value;
        } else {
          echo '年龄不合法';
        }
      } else {
        // 以上操作仅对age有效 其它属性直接赋值
        $this->data[$name] = $value;
      }
    } else {
      echo '禁止动态创建属性';
    }
  }

  // 方法拦截器 
  public function __call($name, $args) {
    // 方法名 传给方法的参数
    printf('方法名：%s<br> 参数：<pre>%s</pre>', $name, print_r($args, true));
  }

  // 静态方法拦截器
  public static function __callStatic($name, $args) {
    // 方法名 传给方法的参数
    printf('方法名：%s<br> 参数：<pre>%s</pre>', $name, print_r($args, true));
  }
}
$user = new User;

echo $user->name .'<br>';

// 为一个属性赋值的时候 有没有这个属性 这个值是不是合法
$user->age = 19;
echo $user->age .'<br>';

// 常规方法 非静态方法 用实例调用
$user -> hello('lw', 'php');

// 静态方法
User::world('lw', 'php');