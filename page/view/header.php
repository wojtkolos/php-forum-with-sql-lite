<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 6 - WWW i jzyki skryptowe</title>
    <meta charset="utf-8">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="css/style6.css">
</head>
<body>
<header>
  <h1 class="logo">
      Zadanie 6
  </h1>
  <h2 class="logo">
      Forum - SQLite
  </h2>
</header>
<nav>
        <a href="../">Home</a>
        <?php for($n=1;$n<=10;$n++) { if( is_dir("../zadanie".$n) ) { ?>
        <a href="../zadanie<?=$n?>">Zadanie <?=$n?></a>
        <?php } } ?>
</nav>