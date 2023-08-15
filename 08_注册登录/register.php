<!DOCTYPE html>
<html lang="en">

<?php
session_start();

// 判断用户是否已经登录
if (isset($_SESSION['user'])) {
  echo '<script>alert("不要重复登录");location.href="index.php"</script>';
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>用户注册</title>
</head>
<body>
  <form action="handle.php?action=register" method="post">
    <fieldset style="display: inline-block">
      
        <legend>用户注册</legend>
        <p>
          <input type="text" name="name" placeholder="用户名"/>
        </p>
        <p>
          <input type="email" name="email" placeholder="user@email"/>
        </p>
        <p>
          <input type="password" name="password" placeholder="不少于6位" require/>
        </p>
        <p>
          <input type="password" name="new_password" placeholder="两次必须一次" require/>
        </p>
        <p>
          <button type="submit">提交</button>
        </p>
    </fieldset>
  </form>
</body>
</html>