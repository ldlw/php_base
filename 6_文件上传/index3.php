<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>多文件上传1</title>
</head>

<?php
  printf('<pre>%s</pre>', print_r($_FILES, true));

  foreach ($_FILES as $file) {
    if ($file['error'] === 0) {
      $dest = __DIR__ .'/uploads/' . $file['name'];
      echo $dest;
      move_uploaded_file($file['tmp_name'], $dest);
      echo "<img src='$dest' width='200'/>";
    }
  }
?>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>多文件上传:挨个上传</legend>
      <input type="file" name="my_pic1"></input>
      <input type="file" name="my_pic2"></input>
      <input type="file" name="my_pic3"></input>
      <button>上传</button>
    </fieldset>
  </form>
</body>

</html>