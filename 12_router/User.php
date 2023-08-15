<?php
// 模块当命名空间
namespace admin;

class User {
  public static function index($id, $name) {
    printf('id= %d, name = %s', $id, $name);
  }
}