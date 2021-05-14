    <?php
    get_header();
    ?>

		<main>
		<!-- denna loop kör ut bild, titel och content titel till förstasidan -->
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
    <!-- footer -->
        <?php
        get_footer();
        ?>
		

	</div>

    <?php wp_footer(); ?>
</body>
</html>