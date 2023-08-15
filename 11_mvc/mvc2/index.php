<?php
namespace phpcn;

// 框架的入口文件
// 实际调用的是控制器方法

// 加载模型类
require __DIR__ . '/model/Model.php';

// 加载视图类
require __DIR__ . '/view/View.php';

// 加载控制器
require __DIR__ . '/controller/Controller.php';

// 实例化模型
$model = new Model('mysql:dbname=phptest', 'root', 'root');

// 实例视图类
$view = new View();

// 实例化控制器类
$controller = new Controller($model, $view);

echo $controller -> index();