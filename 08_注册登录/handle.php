<?php
// 根据用户不同的请求 执行不同的操作
// 比如 登录 注册 退出
// 开启会话
session_start();

$params = ['mysql', 'localhost', 'phptest', '3306', 'utf8'];
$dsn = vsprintf('%s:host=%s;dbname=%s;port=%s;charset=%s', $params);
$db = new PDO($dsn, 'root', 'root');


$stmt = $db->prepare('SELECT * from `user`');
$stmt -> execute();
$users = $stmt -> fetchAll(PDO::FETCH_ASSOC);
// print_r($users);
// echo '<hr>';

// echo "handle.php";
$action = $_GET['action'];

switch (strtolower($action)) {
  case 'login':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // 先拿到登录数据
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      extract($_POST);
      $result = array_filter($users, function ($user) use ($email, $password) {
        // echo md5($password). '---'. md5($password);
        return $user['email'] === $email && $user['password'] === md5($password); // md5解密
      });
      if (count($result) === 1) {
        // 验证成功，将用户信息写进session
        // print_r(serialize(array_pop($result)));
        // 序列化和反序列化 转成字符串
        // $a = serialize(array_pop($result));
        // print_r($a);
        // print_r(unserialize($a));

        // 将用户信息序列化之后保存到SESSION中
        $_SESSION['user'] = serialize(array_pop($result));
        exit('<script>alert("验证通过");location.href="index.php"</script>');
      } else {
        exit('<script>alert("邮箱或密码错误");location.href="index.php"</script>');
      }
    } else {
      echo '请求错误';
    }
    break;
  case 'logout':
    if (isset($_SESSION['user'])) {
      session_destroy();
      exit('<script>alert("退出成功");location.href="index.php"</script>');
    }
    break;
  case 'register':
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['new_password']);
    $register_time = time(); // 时间戳

    $sql = 'INSERT INTO `user` SET `name`=?, `email`=?, `password`=?, `register_time`=?';
    echo $sql . '<br>';
    echo $name, $email, $password, $register_time . '<br>';
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $email, $password, $register_time]);
    echo $stmt->rowCount();
    if ($stmt->rowCount() === 1) {
      exit('<script>alert("注册成功");location.href="index.php"</script>');
    } else {
      exit('<script>alert("注册失败");location.href="index.php"</script>');
    }
    break;   
}