<?php
$users = [
  0 => ['id' => 5, 'name' => "lw", 'course' => 'js', 'age' => 18],
  1 => ['id' => 9, 'name' => "lw4", 'course' => 'js', 'age' => 18],
  2 => ['id' => 6, 'name' => "lw1", 'course' => 'php', 'age' => 28],
  3 => ['id' => 8, 'name' => "lw2", 'course' => 'java', 'age' => 38],
  4 => ['id' => 8, 'name' => "lw5", 'course' => 'go', 'age' => 48]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php流程控制模板、替代语法</title>
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
</style>
<body>
  <table>
    <caption>学生成绩表</caption>
    <thead>
      <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>课程</th>
        <th>成绩</th>
      </tr>
    </thead>
    <tbody>
      <!-- php模板语法 html与php代码分离 -->
      <!-- "{" 变成 冒号加php结束标记 -->
      <!-- 里面是html环境 -->
      <!-- 使用短标签进行优化 只打印一个变量-->
      <?php foreach ($users as $user) : ?>
        <!-- <tr>
          <td><?php echo $user['id'] ?></td>
          <td><?= $user['name'] ?></td>
          <td><?= $user['course'] ?></td>
          <td><?= $user['age'] ?></td>
        </tr> -->

        <!-- 只打印年纪大于18 -->
        <!-- <?php if ($user['age'] > 18) : ?>
          <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['course'] ?></td>
            <td><?= $user['age'] ?></td>
          </tr>
        <?php endif ?> -->
        
        <!-- 动态设置样式 -->
        <tr>
          <td><?php echo $user['id'] ?></td>
          <td><?= $user['name'] ?></td>
          <td><?= $user['course'] ?></td>
          <!-- <td class="<?= $user['age'] > 18 ? 'active' : '' ?>"><?= $user['age'] ?></td> -->
          <!-- 声明一个变量 -->
          <?php $active = $user['age'] > 18 ? 'active' : '' ?>
          <td class="<?= $active ?>"><?= $user['age'] ?></td>
        </tr>

      <?php endforeach ?>

    </tbody>  
  </table>
</body>
</html>
