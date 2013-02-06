<?php
/*
Template Name: Page Full Width
*/
?>
<?php get_header(); ?> <!-- ouvrir header,php -->

		<div class="container">
			<div class="row-fluid">
				<div class="span12">

					<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								
								<div class="post_content">

									<?php the_content(); ?>
								
								</div>
						</div>
					<?php endwhile; ?>
					
					<?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
					<?php else : ?>
					<h2>Oooopppsss...</h2>
					<p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>
						
					<?php endif; ?>
				</div><!-- span12 -->
			</div><!-- row-fluid -->		
		</div><!-- container -->
	</div><!-- id page -->


<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>