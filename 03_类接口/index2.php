<?php
// PHP对象基于类 类似对象的模板
class Goods {

}
$goods = new Goods;
var_dump($goods);

// 大驼峰/帕斯卡
$class = ucfirst('goods');
echo $class.'<br>';
var_dump($goods instanceof Goods);