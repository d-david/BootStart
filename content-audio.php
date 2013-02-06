<?php $general_options = get_option ( 'meanthemes_theme_general_options_moustachey' ); ?>
<?php $content_options = get_option ( 'meanthemes_theme_content_options_moustachey' ); ?>


        <article class="article-archive format-audio" id="post-<?php the_ID(); ?>" >
        	<div class="hgroup">
        	<div class="icon audio"></div>
        	<h2>
        	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>">
        	<?php the_title(); ?></a></h2>
        		<div class="meta top">
        				<p><time class="time" datetime="<?php the_date('Y-m-d', '', ''); ?> " ><?php the_time('jS F Y') ?></time>
        				</p>
        				<p><span class="comment"><?php comments_popup_link( __( '0 Comments','meanthemes' ), __( '1 Comment','meanthemes' ), __( '% Comments','meanthemes' ) ); ?></span><?php _e( ' | ','meanthemes' ); ?><a class="more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php echo sanitize_text_field( $content_options['read_more'] ); ?></a></p>
        		  </div>
        	</div>	
        	<?php if(has_post_thumbnail()) { ?>
        	 <audio src="<?php echo get_post_meta($post->ID, 'single_format_audio', true); ?>" preload="auto" />
        	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><span class="post-thumb">
        		<?php the_post_thumbnail("archive-thumb"); ?></span></a>
        	<div class="archive-excerpt">
        	
        			<?php global $more; $more = 0; ?>
        			<?php
        			$ismore = @strpos( $post->post_content, '<!--more-->');
        			if($ismore) : the_content('',FALSE,'');
        			else : the_excerpt();
        			endif;
        			?>
        		
        		<div class="meta">
        				<span class="tag"><?php the_category(', '); ?></span>
        		  </div>
        		</div>	
        		<p><a class="more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php echo sanitize_text_field( $content_options['read_more'] ); ?></a></p>
        		
        			</div>	
        		
        	<?php } else { ?>
        		<div class="archive-excerpt nothumb">
        				 <audio src="<?php echo get_post_meta($post->ID, 'single_format_audio', true); ?>" preload="auto" />
        				<?php global $more; $more = 0; ?>
        				<?php
        				$ismore = @strpos( $post->post_content, '<!--more-->');
        				if($ismore) : the_content('',FALSE,'');
        				else : the_excerpt();
        				endif;
        				?>
        	
        		</div>	
        		<div class="meta">
        				<span class="tag"><?php the_category(', '); ?></span>
        				
        		  </div>
        			<p><a class="more" href="<?php the_permalink(); ?>" title="<?php the_title(); ?> - <?php echo sanitize_text_field( $content_options['read_more'] ); ?>"><?php echo sanitize_text_field( $content_options['read_more'] ); ?></a></p>
        		</div>
        	<?php } ?>
        	</article>
		<?php comments_template( '', true ); ?>
