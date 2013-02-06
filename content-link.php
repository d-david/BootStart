										<div id="article-<?php the_ID( ); ?>" <?php post_class( ); ?>>
							               	<div class="single">
							                    <div class="container-fluid">
                                                    <div class="span12">
                                                     <div class="icon link"></div>
											        	<h2><a href="<?php echo esc_url(get_post_meta($post->ID, 'single_format_link_url', true)); ?>" title="<?php echo get_post_meta($post->ID, 'single_format_link_text', true); ?>"><?php echo get_post_meta($post->ID, 'single_format_link_text', true); ?></a></h2>
											        	<p>
											        	<?php the_title(); ?></p>
                                                    </div><!-- span12 -->
                                                </div><!-- container-fluid -->
													
													
							                    </div><!-- single -->

					
							               </div>
							     
									  <br />