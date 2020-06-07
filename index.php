<?php
//php
$pageName = $_GET['action'] ?? null;
// var_dump($pageName);
?>
<html>

<head>
  <style>
    h1 {
      color: red;
    }

    a {
      color: lightcoral;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <h1>Moja strona w php</h1>
  <nav>
    <ul>
      <li>
        <a href="/">Strona główna</a>
      </li>
      <li>
        <a href="/?action=page1">Podstrona pierwsza</a>
      </li>
      <li>
        <a href="/?action=page2">Podstrona druga</a>
      </li>
      <li>
        <a href="/?action=page3">Podstrona trzecia</a>
      </li>
    </ul>
  </nav>
  <section>
    <hr>
    <?php if ($pageName === 'page1') : ?>
      <h3>To jest podstrona pierwsza</h3>
    <?php elseif ($pageName === 'page2') : ?>
      <h3>To jest podstrona druga</h3>
    <?php elseif ($pageName === 'page3') : ?>
      <h3>To jest podstrona trzecia</h3>
    <?php else : ?>
      <h3>To jest nasza strona główna</h3>
    <?php endif; ?>
    <hr>

  </section>
</body>

</html>