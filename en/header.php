<?php
$path = $_SERVER['PHP_SELF'];
$page = basename($path);
$page = basename($path, '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta name="description" content="RuBro is an independent Broking Company specialising in physical and derivatives broking of Natural Rubber and Latex and offers its customers decades of experience in the physical rubber trading. For more information on our company please feel free to browse throughout our site or contact us directly.">

    <title>RuBro - The Rubber Broking Company</title>
    <!-- Style for development -->
    <link rel="stylesheet" href="../css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<!--
Style for production
    <link rel="stylesheet" href="css/style.min.css">
-->

<!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
          <li><a href="index.php" <?php if($page == 'index'): ?> class="active" <? endif ?> >Mission</a></li>
          <li><a href="History.php" <? if($page == 'History'): ?> class="active" <? endif ?> >History</a></li>
          <li><a href="Values.php" <? if($page == 'Values'): ?> class="active" <? endif ?>>Values</a></li>
          <li><a href="Products.php" <? if($page == 'Products'): ?> class="active" <? endif ?>>Products</a></li>
          <li><a href="Contact.php" <? if($page == 'Contact'): ?> class="active" <? endif ?>>Contact</a></li>
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
