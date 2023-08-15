<?php
// 方法重载的小案列
// Db::table('think_user')->where('id', 1)->find();

// $db->table('think_user')
// $db->where('id', 1)
// $db->find()

// 查询类
class Query {
  public function table($table) {
    // 方便后面的链式调用
    return $this;
  }
  public function where($where) {
    return $this;
  }
  public function find() {
    // 用数组来模拟数据表的查询结果
    return ['id' => 1, 'name' => 'lw', 'email' => 'admin@qq.com'];
  }
}
$query = new Query;

$query->table('think_user')->where('id', 1)->find();

// 入口类：实现请求转发 Db::table
class Db {
  // 静态方法重载、重定向
  public static function __callStatic($name, $args) {
    // $query = new Query;
    // return $query->$name($args);

    // 更简单写法
    return call_user_func([new Query, $name], $args);
  }
}

$res = Db::table('think_user')->where('id', 1)->find();
printf('<pre>%s</pre>', print_r($res, true));