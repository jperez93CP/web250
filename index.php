<?php
$page = $_GET['page'] ?? 'home';

$pages = [
    'home' => 'Home',
    'contract' => 'Contract',
    'introduction' => 'Introduction'
];

// fallback if invalid page
if (!array_key_exists($page, $pages)) {
    $page = 'home';
}

$title = $pages[$page];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jordan Perez's Jubilant Parakeet | WEB250 | <?= $title ?></title>
    <link rel="stylesheet" href="styles/default.css" />
    <script
      src="https://lint.page/kit/67ff88.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>

<header>
    <h1>Jordan Perez's Jubilant Parakeet | WEB250</h1>
  <nav>
    <ul>
      <li><a href="contents/home.php">Home</a></li>
      <li><a href="contents/introduction.php">Introduction</a></li>
      <li><a href="contents/contract.php">Contract</a></li>
      <li>
        <a
          href="https://jperez93cp.github.io/web250/multipage_sites/superduper_static/index.htm"
          >MP Static</a
        >
      </li>
      <li>
        <a
          href="https://jperez93cp.github.io/web250/multipage_sites/superduper_php/index.php"
          >MP PHP</a
        >
      </li>
    </ul>
  </nav>
</header>

<main>
    <?php include "contents/$page.php"; ?>
</main>

<footer>
  <a href="http://github.com/jperez93CP/" target="_blank">GitHub</a>
  <a href="http://jperez93CP.github.io/" target="_blank">GitHub.io</a>
  <a href="https://jperez93cp.github.io/web250/" target="_blank">WEB250.io</a>
  <a href="https://jperez93cp.github.io/web215/" target="_blank">WEB215.io</a>
  <a href="https://www.freecodecamp.org/JordanPerezCP" target="_blank"
    >freeCodeCamp</a
  >
  <a href="https://www.codecademy.com/profiles/java8757677268" target="_blank"
    >Codecademy</a
  >
  <a href="https://jsfiddle.net/u/Jordan_P/" target="_blank">JSFiddle</a>
  <a href="https://www.linkedin.com/in/jordan-perez-b64623371/" target="_blank"
    >Linkedin</a
  >
</footer>

</body>
</html>