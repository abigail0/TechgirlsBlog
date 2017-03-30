<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="indexStyle.css">
  </head>
  <body>
    <?php
    $str = "Hello Girls, this is the start of our Blog";
    $revStr = strrev($str);
    $origStr = strrev($revStr);
    ?>
    <h1 class="centre">Welcome to the Blog</h1>
    <h2 class="centre"><?= $revStr; ?></h2>
    <h2 class="centre">and</h2>
    <h2 class="centre"><?= $origStr; ?></h2>
  </body>
</html>
