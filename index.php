<?php get_header(); ?> 

		
			<div class="row-fluid">
				<div class="span8">
					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
						
					<?php endwhile; ?>

						<div class="navigation">
							<?php posts_nav_link(' - ','page suivante','page pr&eacute;c&eacute;dente'); ?>
						</div>

						<?php else : ?>
							<h2>Oooopppsss...</h2>
							<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
						<?php include (TEMPLATEPATH . "/searchform.php"); ?>

					<?php endif; ?>
			
				</div><!-- span8 -->
				<div class="span4">
			<?php get_sidebar(); ?>
				</div><!-- span4 -->


			</div><!-- row-fluid -->
		</div><!-- container -->

	</div> <!-- div page -->


<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>