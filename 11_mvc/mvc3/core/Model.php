<?php
namespace phpcn;

use PDO;

class Model {
  // 连接对象
  protected $db;

  // 实例化
  public function __construct($dsn, $username, $password) {
    $this -> db = new PDO($dsn, $username, $password);
  } 

  // 获取分页数据 多条
  public function getAll ($n = 10) {
    $stmt = $this -> db -> prepare('SELECT * FROM `staff` LIMIT ? ');

    // 默认绑定都是字符串
    // 1个参数
    $stmt -> bindParam(1, $n, PDO::PARAM_INT);
    $stmt -> execute();
    // 打印一条 SQL 预处理命令
    // print_r($stmt -> debugDumpParams());
    return $stmt -> fetchAll();
  }
}

$result = (new Model('mysql:dbname=phptest', 'root', 'root')) -> getAll();
// print_r($result);