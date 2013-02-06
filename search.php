<?php get_header(); ?> <!-- ouvrir header,php -->

		<div id="content">
			<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p class="postmetadata">
						 
								<?php the_time('j F Y') ?> par <?php the_author() ?> | 
								Cat&eacute;gorie: <?php the_category(', ') ?> | 
								<?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?>
		
						</p>
						<div class="post_content">

							<?php the_content(); ?>
						
						</div>
				</div>
			<?php endwhile; ?>
				<?php else : ?>
				<h2 class="center">Aucun article trouvé. Essayer une autre recherche ?</h2>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<?php endif; ?>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>