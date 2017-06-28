<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <form method="post" action="Controllers\FormController.php">
      <label>
      <input type="text" name="text">текст</label><br>
      <label>
      <input type="text" name="phone">телефон</label><br>
      <label>
      <input type="email" name="email">емейл</label><br>
      <input type="submit" value="add">
  </form>

</body>
</html>
<?php

