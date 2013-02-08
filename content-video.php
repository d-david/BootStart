<div class="single" id="article-<?php the_ID( ); ?>" <?php post_class( ); ?>>
            <div class="video">
                <?php echo get_post_meta($post->ID, 'single_format_video', true); ?>
             </div><!-- video -->
    <div class="container-fluid">
        <div class="span12">
            <h2><a href="<?php the_permalink( ); ?>" title="<?php the_title( ); ?>"><?php echo the_title( ); ?></a></h2>
            <h5><?php the_time('j F Y') ?> | <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?> <?php edit_post_link('Editer', ' &#124; ', ''); ?></h5>
        </div><!-- span12 -->
    </div><!-- container-fluid -->
    <div class="container-fluid">
        <?php the_content( 'Lire la suite &raquo;' ); ?>
    </div><!-- container-fluid -->
</div><!-- single -->
<br />