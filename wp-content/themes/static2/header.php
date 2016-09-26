<?php
/* Header */
?><!DOCTYPE HTML>

 <html>

    <head>

    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta charset="utf-8">

        <!-- Description, Keywords and Author -->

        <meta name="description" content="">

        <meta name="author" content="">

        <title>:: avana LLC ::</title>

		    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

        <?php wp_head(); ?>
	</head>

    <body class="<?php body_class(); ?>">

    	<!-- header -->

        	<header role="header">

            	<div class="container">

                    	<h1>
                          <?php //bloginfo('name'); ?>
                          <a data-type="site-title" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
                        	<!-- <a href="<?php //echo home_url(); ?>" title="avana LLC"><img src="<?php // bloginfo('name'); ?>/images/logo.png" title="avana LLC" alt="avana LLC"/></a> -->
                      </h1>

                    <!-- nav -->

                    <nav role="header-nav" class="navy">

                        <ul>

                            <li class="nav-active"><a href="<?php echo home_url(); ?>/works" title="Work">Work</a></li>

                            <li><a href="<?php echo home_url(); ?>/about" title="About">About</a></li>

                            <li><a href="<?php echo home_url(); ?>/blog" title="Blog">Blog</a></li>

                            <li><a href="<?php echo home_url(); ?>/contact" title="Contact">Contact</a></li>

                        </ul>

                    </nav>

                    <!-- nav -->

                </div>

            </header>

        <!-- header -->

        <!-- main -->