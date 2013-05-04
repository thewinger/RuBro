<?php
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="RuBro es una Empresa independiente de Corretaje/Broking que está especializada en el comercio físico y de derivados de Caucho Natural y Látex y ofrece a sus clientes décadas de experiencia en este sector. Para tener más conocimiento sobre nuestra empresa, por favor no dude en buscar la información a través de nuestra web o puede ponerse en contacto con nosotros directamente.">

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
          <li><a href="index.php" <?php if($page == 'index'): ?> class="active" <? endif ?> >Mision</a></li>
          <li><a href="Historia.php" <? if($page == 'History'): ?> class="active" <? endif ?> >Historia</a></li>
          <li><a href="Valores.php" <? if($page == 'Values'): ?> class="active" <? endif ?>>Valores</a></li>
          <li><a href="Productos.php" <? if($page == 'Products'): ?> class="active" <? endif ?>>Productos</a></li>
          <li><a href="Contacto.php" <? if($page == 'Contact'): ?> class="active" <? endif ?>>Contacto</a></li>
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
