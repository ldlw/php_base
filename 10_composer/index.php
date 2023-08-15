<?php
namespace phpcn;

// require __DIR__ . '/src/Test1.php';
// require __DIR__ . '/src/Test2.php';
// require __DIR__ . '/lib/Test1.php';
// require __DIR__ . '/lib/Test2.php';

// 使用composer的自动加载器
require __DIR__ . '/vendor/autoload.php';

echo \ns1\Test1Class::show() .'<br>';
echo \ns2\Test2Class::show() .'<br>';
echo \ns3\Test1Class::show() .'<br>';
echo \ns4\Test2Class::show() .'<br>';
echo \ns5\Test1Class::show() .'<br>';

echo DB['host'] . '<br>';

echo D('liuwei'). '<br>';

// 如果遵循PSR-4 类的命名空间与类文件路径进行映射
// 当前在phpcn空间下 要从根开始
echo \admin\controller\User1::index();


// 用medoo
// Use the Medoo namespace.
use Medoo\Medoo;

// Connect to the database.
$database = new Medoo([
  'type' => 'mysql',
  'host' => 'localhost',
  'database' => 'phptest',
  'username' => 'root',
  'password' => 'root'
]);

$data = $database->select('staff', [
  'id',
  'name',
  'email'
], [
    'id[>]' => 50
]);

echo '<hr>';
echo json_encode($data);
printf('<pre>%s</pre>', print_r($data, true));
