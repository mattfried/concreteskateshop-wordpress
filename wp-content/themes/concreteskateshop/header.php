<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

  <?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

  <!-- Header -->
  <header id="home">
    <!-- Background Image -->
    <div class="bg-img" style="background-image: url('<?php bloginfo('template_directory');?>/img/hero-bg.jpg');">
      <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Nav -->
    <nav id="nav" class="navbar nav-transparent">
      <div class="container">

        <div class="navbar-header">
          <!-- Logo -->
          <div class="navbar-brand">
            <a href="index.html">
              <img class="logo" src="<?php bloginfo('template_directory');?>/img/logo.png" alt="logo">
              <img class="logo-alt" src="<?php bloginfo('template_directory');?>/img/logo-alt.png" alt="logo">
            </a>
          </div>
          <!-- /Logo -->

          <!-- Collapse nav button -->
          <div class="nav-collapse">
            <span></span>
          </div>
          <!-- /Collapse nav button -->
        </div>

        <!--  Main navigation  -->
        <ul class="main-nav nav navbar-nav navbar-right">
          <li><a href="#home">Home</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#brands">Brands</a></li>
          <li><a href="#about">About</a></li>
          <li class="has-dropdown"><a href="#blog">Blog</a>
            <ul class="dropdown">
              <li><a href="blog-single.html">blog post</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <!-- /Main navigation -->

      </div>
    </nav>
    <!-- /Nav -->

    <!-- home wrapper -->
    <div class="home-wrapper">
      <div class="container">
        <div class="row">

          <!-- Insert hero data for custom fields -->
          <?php $hero = get_field('hero'); ?>

          <!-- home content -->
          <div class="col-md-10 col-md-offset-1">
            <div class="home-content">
              <h1 class="white-text"><?php echo $hero['main_title']; ?></h1>
              <p class="white-text"><?php echo $hero['small_title']; ?></p>
              <!-- <button class="white-btn">Get Started!</button> -->
              <!-- <a><button class="main-btn"></button><a/> -->
            </div>
          </div>
          <!-- /home content -->

        </div>
      </div>
    </div>
    <!-- /home wrapper -->

  </header>
  <!-- /Header -->
