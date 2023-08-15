<?php
require __DIR__ . '/autoloader.php';

// echo think\admin\model\User::index();
use think\admin\model\User;
echo User::index() . '<br>';
echo '完整类名：' . User::class;