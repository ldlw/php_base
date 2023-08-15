<?php
$user = 'lw';

echo $user.'<br>';

var_dump($user);

echo '<br>';

$user = 'liuwei';

echo $user.'<hr>';

function getUserName(string $user): string {
  return 'hello'.$user;
}

echo getUserName('liuwei 66').'元<br>';

function getTotal(float $price, $num = 1): float {
  return $price * $num;
}

echo '总金额'.getTotal(68.5).'元<br>';
echo '总金额'.getTotal(68.5, 2).'元<br>';

$getTotal2 = function (float $price, int $num = 1): float {
  return $price * $num;
};

echo " 总金额 {$getTotal2(10, 2)} 元<br>";

$sum = function(float $a, float $b, float $c): float {
  return $a + $b + $c;
};

echo $sum(3, 4, 5).'<br>';
echo $sum(3, 4, 5, 6).'<br>';

$sum = function(...$args) {
  print_r($args);
  return array_reduce($args, function ($acc, $cur) {
    return $acc + $cur;
  }, 0);
};
echo $sum(3, 4, 5, 6, 7).'<br>';

$arr = [1, 2, 40, 50];

function getItems(array $arr, $value): array {
  // 使用外部变量 需要use声明
  return array_filter($arr, function ($item) use ($value) {
    return $item > $value;
  });
}
print_r(getItems($arr, 20));
