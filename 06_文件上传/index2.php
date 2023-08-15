<!DOCTYPE html>
<html lang="en">
<!-- 单文件上传 -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>文件上传的表单构造 超全局变量$_FILE</title>
</head>

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_SERVER['REQUEST_METHOD'];
    printf('<pre>%s</pre>', print_r($_FILES, true));
    // $_FILES 超全局变量保存着文件上传的全部信息
    // 二维数组, 每个元素对应一个文件
    // 1.name 原始文件名
    // 2.type 文件类型
    // 3.tmp_name 临时目录
    // 4. error 错误代码
    // 5. size 文件大小(字节表示 byte)

    if (isset($_FILES['my_pic'])) {
      $name = $_FILES['my_pic']['name'];
      $tmpName = $_FILES['my_pic']['tmp_name'];
      $error = $_FILES['my_pic']['error'];
      if ($error > 0) {
        $tips = '<span style="color:red">上传失败:</span>';
        switch ($error) {
          case 1:
            $tips .= '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值';
            break;
          case 2:
            $tips .= '上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值';
            break;
          case 3:
            $tips .= '文件只有部分被上传';
            break; 
          case 4:
            $tips .= '没有文件被上传';
            break; 
          case 6:
            $tips .= '找不到临时文件夹';
            break;
          case 7:
            $tips .= '文件写入失败';
            break;   
        }
        echo "<p>${tips}</p>";
      } else {
        // suss 判断是不是post方式上传的
        if (is_uploaded_file($tmpName)) {
          // 设置允许上传文件类型的白名单
          $allow = ['jpg', 'jpeg', 'png', 'gif'];
          // 获取文件扩展名
          $ext = pathinfo($name)['extension'];
          // 文件类型是合法的
          if (in_array($ext, $allow)) {
            // 目标目录
            $path = 'uploads/';
            // 自定义目标文件名
            $dest = $path . md5($name) . '.' . $ext;
            // 将文件从临时目录中移动到目标目录 并重命名
            if (move_uploaded_file($tmpName, $dest)) {
              echo '<p style="color:green">上传成功</p>';
              echo "<img src='$dest' width='200'/>";
            } else {
              echo '<p style="color:red">移动失败</p>';
            }
          } else {
            echo '<p style="color:red">文件类型错误</p>';
          }
        } else {
          echo '<p style="color:red">非法方式上传</p>';
        }
      }
    }
  }
?>

<body>
  <!-- 
    允许上传文件的特征
    method="post" 
    enctype="multipart/form-data"
   -->
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>单文件上传</legend>
      <!-- 浏览器限制上传文件的大小 写到隐藏input 并在type=file之前 -->
      <input type="hidden" name="MAX_FILE_SIZE" value="300000"></input>
      <input type="file" name="my_pic"></input>
      <button>上传</button>
    </fieldset>
  </form>
</body>

</html>