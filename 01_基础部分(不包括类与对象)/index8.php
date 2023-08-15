<?php
$users = [
  0 => ['id' => 5, 'name' => "lw", 'course' => 'js', 'age' => 18],
  1 => ['id' => 9, 'name' => "lw4", 'course' => 'js', 'age' => 18],
  2 => ['id' => 6, 'name' => "lw1", 'course' => 'php', 'age' => 28],
  3 => ['id' => 8, 'name' => "lw2", 'course' => 'java', 'age' => 38]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php与原生混编</title>
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
      <?php
        foreach ($users as $user) {
          // echo "<tr>";
          // echo "<td>{$user['id']}</td>";
          // echo "<td>{$user['name']}</td>";
          // echo "<td>{$user['course']}</td>";
          // echo "<td>{$user['age']}</td>";
          // echo "</tr>";

          // heredoc 写模板 可以解析内部变量
          // echo <<< STU
          //   <tr>
          //     <td>{$user['id']}</td>
          //     <td>{$user['name']}</td>
          //     <td>{$user['course']}</td>
          //     <td>{$user['age']}</td>
          //   </tr>
          // STU;

          // 只查js
          if ($user['age'] == '18') {
            echo <<<STU
              <tr>
                <td>{$user['id']}</td>
                <td>{$user['name']}</td>
                <td class="active">{$user['course']}</td>
                <td>{$user['age']}</td>
              </tr>
            STU;
          }
        }
      ?>
    <tbody>
  </table>
</body>
</html>
