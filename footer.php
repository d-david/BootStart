<div id="footer">
	<div class="container">
		<div class="row-fluid">
		<?php
			if ( function_exists( 'dynamic_sidebar' )) {
				dynamic_sidebar( "bottom-widget-2" );				
			}
		?>
		</div>
		<div class="row-fluid">
		<?php
			if ( function_exists( 'dynamic_sidebar' )) {
				dynamic_sidebar( "bottom-widget-3" );				
			}
		?>
		</div>
		<div class="row-fluid">
		<?php
			if ( function_exists( 'dynamic_sidebar' )) {
				dynamic_sidebar( "bottom-widget-4" );				
			}
		?>
		</div>
	</div><!-- container -->

<div class="jumbotron subfooter" id="overview">
	<div class="container">
		<div class="row-fluid">
		<?php
			if ( function_exists( 'dynamic_sidebar' )) {
				dynamic_sidebar( "footer-widget-2" );				
			}
		?>
		</div>
		<div class="row-fluid">
		<?php
			if ( function_exists( 'dynamic_sidebar' )) {
				dynamic_sidebar( "footer-widget-3" );				
			}
		?>
		</div>
		<div class="row-fluid">
		<?php
			if ( function_exists( 'dynamic_sidebar' )) {
				dynamic_sidebar( "footer-widget-4" );				
			}
		?>
		</div>
	</div><!-- contianer -->

<div class="copyright">
	<div class="container">
		<div class="row-fluid">
		<p>
				Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?>
				<br />
				Blog propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.fran6art.com">David Dorlet</a>
				<br />
				<a href="feed:<?php bloginfo('rss2_url'); ?>">Articles (RSS)</a> et <a href="feed:<?php bloginfo('comments_rss2_url'); ?>">Commentaires (RSS)</a>.
				<?php echo get_num_queries(); ?> requêtes. <?php timer_stop(1); ?> secondes.
		</p>
	

	</div><!-- row-fluid -->
	</div><!-- container -->
</div><!-- copy -->
</div><!-- jumbotron -->

<!-- Le javascript ================================================== --> 
<script src="../assets/js/jquery.js"></script> 
<script src="../assets/js/bootstrap.js"></script>

</div><!-- footer -->


