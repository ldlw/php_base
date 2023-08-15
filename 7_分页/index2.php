<?php
// SELECT COUNT(`id`) AS total FROM `staff`;

$params = ['mysql', 'localhost', 'phptest', '3306', 'utf8'];
$dsn = vsprintf('%s:host=%s;dbname=%s;port=%s;charset=%s', $params);
$db = new PDO($dsn, 'root', 'root');

// 当前页
// $page = isset($_GET['p']) ? $_GET['p'] : 1;
$page = $_GET['p'] ?? 1;

// 每页显示数量
$num = 5;

// 记录总数
$sql = 'SELECT COUNT(`id`) AS total FROM `staff`';
$stmt = $db->prepare($sql);
$stmt -> execute();
$stmt -> bindColumn('total', $total);
$stmt -> fetch(PDO::FETCH_ASSOC);
echo '总记录数'. $total . '<br>';

// 总页数
// ceil 向上取整
$pages =  ceil($total / $num);
echo '总页数'. $pages. '<br>';

// 偏移量 = (当前页 - 1) * 显示数量
$offset = ($page - 1) * $num;
echo '偏移量'. $offset. '<br>';

// 分页数据
// $sql = "SELECT * FROM `staff` LIMIT $num OFFSET $offset";
$sql = "SELECT * FROM `staff` LIMIT $offset, $num";
// echo $sql. '<br>';
$stmt = $db -> prepare($sql);
$stmt->execute();
$staffs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 遍历
if (count($staffs) === 0) {
  echo '查询结果为空';
} else {
  foreach ($staffs as $staff) {
    extract($staff);
    printf('%d-%s-%s-%s<br>', $id, $name, $sex, $email);
  }
}

echo '<hr>';