<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<link href=<?php echo get_template_directory_uri().'/css/font-awesome.css'?> rel="stylesheet" type="text/css" />
	<link href=<?php echo get_template_directory_uri().'/css/bootstrap.css'?> rel="stylesheet" type="text/css" />
	<link href=<?php echo get_template_directory_uri().'/css/style.css'?> rel="stylesheet" type="text/css" />
	<script src=<?php echo get_template_directory_uri()."/js/jquery.js"?>></script>
    <?php wp_head(); ?>
</head>
<body>

	<div id="wrap">

    <!-- header -->
    <?php
    get_header();
    ?>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">
								<a href="index.html">Hem</a>
							</li>
							<li>
								<a href="blogg.html">Blogg</a>
							</li>
							<li>
								<a href="undersida.html">Undersida</a>
							</li>
							<li>
								<a href="undersida2.html">Undersida 2</a>
							</li>
							<li>
								<a href="undersida3.html">Undersida 3</a>
							</li>
							<li>
								<a href="undersida4.html">Undersida 4</a>
							</li>
							<li>
								<a href="kontakt.html">Kontakt</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<main>
        <?php
        while(have_posts()) {
            the_post();
        ?>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                                <?php the_post_thumbnail();?>
								<div class="text">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        <?php    
        }
        ?>
        </main>

        <?php
        get_footer();
        ?>
		

	</div>

	<script src=<?php echo get_template_directory_uri().'/js/script.js'?>></script>
    <?php wp_footer(); ?>
</body>
</html>