<?php get_header( ); ?>
<div class="container">
			<div class="row-fluid">
				<div class="span8">

							     
							          <?php while ( have_posts( )): ?>
							               <?php the_post( ); ?>
							               <?php get_template_part( 'content', get_post_format() ); ?>

							               
							          
							             <div class="container-fluid">
							               	<div class="span6">
							               		<button class="btn btn-large" type="button"><?php previous_post_link( '%link', '&laquo; %title' ); ?></button>
							               
							           		</div>	
							           		<div class="span6">
							           		<div class="pagination-right">
							               <button class="btn btn-large" type="button"><?php next_post_link( '%link', '%title &raquo;' ); ?></button>
							           		</div>
							           		</div>
							          	</div>
							         
							          
							        
							          <?php comments_template( ); ?>
							     

							          
							     
							     <?php endwhile; // end of the loop. ?>
				</div><!-- span8 -->
				<div class="span4">
		<?php get_sidebar(); ?>
				</div><!-- span4 -->
			</div><!-- row-fluid -->
		</div><!-- container -->


	</div><!-- page -->


<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>