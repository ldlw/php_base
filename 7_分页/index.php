<?php require 'index2.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>页面展示分页数据</title>
</head>
<style>
  table {
    border-collapase: collapse;
    width: 360px;
    text-align: center;
  }
  table th,
  table td {
    border: 1px solid #000;
    padding: 5px;
  }
  table caption {
    font-size: 1.3rem;
  }
  table thead {
    background-color: lightcyan;
  }
  .active {
    color: red;
  }
  p a {
    text-decoration: none;
    color: #555;
    border: 1px solid;
    padding: 5px 10px;
    margin: 10px 2px;
  }
  .active {
    background: seagreen;
    color: white;
    border: 1px solid seagreen;
  }
</style>
<body>
  <table>
    <caption>
      员工信息表
    </caption>
    <theader>
      <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>性别</th>
        <th>邮箱</th>
      </tr>
    </theader>
    <tbody>
      <?php foreach ($staffs as $staff): extract($staff) ?>
        <tr>
          <td><?= $id ?></td>
          <td><?= $name ?></td>
          <td><?= $sex ?></td>
          <td><?= $email ?></td>
        </tr>
      <?php endforeach?>
    </tbody>
  </table>
  <p>
    <!-- <a href="">1</a>
    <a href="">2</a>
    <a href="">3</a>
    <a href="">4</a> -->
    <?php for($i = 0; $i < $pages; $i++) :?>
      <!-- <a class="<?= (($i + 1) == $_GET['p'] ? 'active' : '') ?>" href="<?= $_SERVER['PHP_SELF'] . '?p=' .($i+1) ?>"><?= $i + 1 ?></a> -->
      <?php 
        $url = $_SERVER['PHP_SELF'] . '?p=' .($i+1);
        $active = ($i + 1) == $_GET['p'] ? 'active' : '';
      ?> 
      <a class="<?= $active ?>" href="<?= $url ?>"><?= $i + 1 ?></a>
    <?php endfor ?>  
  </p>
</body>
</html>