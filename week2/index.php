<?php include 'variables.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    ul {
      list-style-type: none;
    }
    header {
      background-color: orange;
    }
    footer {
      background-color: purple;
      color: #FFF;
    }
  </style>
</head>
<body>
  <header>
    <?php include 'content/header.html'; ?>
  </header>

  <section>
    <?php

      if (isset($_GET['page'])) {
        $page = "content/" . $_GET['page'] . '.html';

      if(file_exists($page)) {
        include 'content/' . $_GET['page'] . '.html';
      } else {
        include 'content/404.html';
      } }
      else {
        include 'content/home.html';
      }

    ?>
  </section>

  <footer>
    <?php include 'content/footer.html'; ?>
  </footer>
</body>
</html>