<?php require_once('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Functional Coloring</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1>What comes in this color? </h1>
      <?php thingsThisColor('green'); ?>
    </main>
  </body>
</html>