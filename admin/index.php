<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang admin</title>
  <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
</head>
<body>
  <h1>Soạn nội dung</h1>
  <textarea name="blog" id="blog" cols="30" rows="10"></textarea>
  <script type="text/javascript">
    CKEDITOR.replace('blog');
  </script>
</body>
</html>