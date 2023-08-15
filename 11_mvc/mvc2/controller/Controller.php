<?php
namespace phpcn;

class Controller {
  protected $model;
  protected $view;

  // 控制器实例化时 要确保模型和视图对象可用
  public function __construct ($model, $view) {
    $this -> model = $model;
    $this -> view = $view;
  }

  public function index() {
    // 模型：获取数据
    $data = $this->model->getAll(5);

    // 视图：渲染模板
    $this -> view -> display($data);
  }
}