<?php
namespace phpcn;

// 加载配置项
require __DIR__ . './config.php';

// 加载框架的核心类库
require __DIR__ . './core/Controller.php';
require __DIR__ . './core/Model.php';
require __DIR__ . './core/View.php';

// 加载定义模型
require __DIR__ . './model/StaffModel.php';

// 将关联数组解构成一个个变量
extract(DATABASE);
$dsn = sprintf('%s:dbname=%s', $type, $dbname);
$model = new StaffModel($dsn, $username, $password);

// 加载自定义模型
// c=控制器 a=控制器方法
$c = $_GET['c'] ?? APP['default_controller'];
$a = $_GET['a'] ?? APP['default_action'];


// 获取类名
$class = ucfirst($c). 'Controller';
// 加载定义控制器类
require __DIR__ . '/controller/' . $class . '.php';


// 加载视图类
$view = new View();

// 完整控制器类名
$fullclass = __NAMESPACE__ . '\\' . $class;
$controller = new $fullclass($model, $view);

// 执行控制器中的index
echo $controller -> $a();