<div class="single" id="article-<?php the_ID( ); ?>" <?php post_class( ); ?>>
	<div class="container-fluid">
        <div class="span12">
            <div class="icon-quote"></div>
        	<h2><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php echo get_the_content(); ?></a></h2>
        	<p><?php echo get_post_meta($post->ID, 'single_format_quote', true); ?></p>
        </div><!-- span12 -->
    </div><!-- container-fluid -->
</div><!-- single -->
<br />