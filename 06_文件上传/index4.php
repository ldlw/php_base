<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>多文件上传2</title>
</head>

<?php
  printf('<pre>%s</pre>', print_r($_FILES, true));

  if (isset($_FILES['my_pic'])) {
    foreach ($_FILES['my_pic']['error'] as $key=>$error) {
      if ($error === 0) {
        // 临时文件名
        $tmpName = $_FILES['my_pic']['tmp_name'][$key];
        // 原始文件名
        $name = $_FILES['my_pic']['name'][$key];
        // 目标文件名
        $dest = 'uploads/' . $name;
        move_uploaded_file($tmpName, $dest);
        echo "<img src='$dest' width='200'/>";
      }
    }
  }
?>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>多文件上传:挨个上传2</legend>
      <input type="file" name="my_pic[]"></input>
      <input type="file" name="my_pic[]"></input>
      <input type="file" name="my_pic[]"></input>
      <button>上传</button>
    </fieldset>
  </form>
</body>

</html>