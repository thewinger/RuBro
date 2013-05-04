<?php
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="RuBro é uma Empresa Independente de Broking/Corretagem especializada em corretagem físico de Látex  e Borracha Natural e de derivados .Oferece aos seus clientes décadas de experiência no comércio de borracha. Para obter mais informações sobre nossa empresa não hesite em navegar em todo o nosso site ou entre em contato conosco diretamente.">

    <title>RuBro - The Rubber Broking Company</title>
    <!-- Style for development -->
    <link rel="stylesheet" href="../css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<!--
Style for production
    <link rel="stylesheet" href="css/style.min.css">
-->

<!--[if lt IE 9]>
  <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>
<body>
<div class="wrapper">
  <header>
      <h1 class="logo">
        <a href="">
          <img src="../images/logo.png" alt="RuBro" width="190" height="180">
        </a>
      </h1>

      <nav class="nav-main">
        <ul class="nav  nav--block nav--fit">
          <li><a href="index.php" <?php if($page == 'index'): ?> class="active" <? endif ?> >Miss&auml;o</a></li>
          <li><a href="Historia.php" <? if($page == 'History'): ?> class="active" <? endif ?> >Hist&oacute;ria</a></li>
          <li><a href="Valores.php" <? if($page == 'Values'): ?> class="active" <? endif ?>>Valores</a></li>
          <li><a href="Produtos.php" <? if($page == 'Products'): ?> class="active" <? endif ?>>Produtos</a></li>
          <li><a href="Contato.php" <? if($page == 'Contact'): ?> class="active" <? endif ?>>Contato</a></li>
        </ul>
      </nav>
      <nav class="nav-lang">
        <ul class="nav nav--block nav--fit">
          <li><a href="../en/">EN</a></li>
          <li><a href="../es/">ES</a></li>
          <li><a href="../pt/">PT</a></li>
        </ul>
      </nav>
  </header>
