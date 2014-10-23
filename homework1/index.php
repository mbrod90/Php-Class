<?php include 'variables.php'; ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP HW 1</title>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
</head>

<body>
  <header>
    <div class="container">
      <?php include 'content/header.html'; ?>
    </div>
  </header>

  <section>
    <div class="container">
      <?php

        echo '<script language="javascript">';
        echo 'alert("Welcome to my page.")';
        echo '</script>';

        if (isset($_GET['page'])) {
            $page = 'content/' . $_GET['page'] . '.html';

            if (file_exists($page)) {
                include $page;
            } else {
                include 'content/404.html';
            }

        } else {
            include 'content/home.html';
        }
      ?>
    </div>
  </section>

  <footer>
    <?php include 'content/footer.html'; ?>
  </footer>


</body>


