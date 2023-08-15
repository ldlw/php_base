<?php
namespace phpcn;

class View {
  public function display($data) {
    // 模型赋值
    $staffs = $data;

    // 模型渲染
    include 'show.php';
  }
}