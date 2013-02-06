<div class="sidebar">
<ul>
	<?php
			if ( function_exists( 'dynamic_sidebar' )) {
				/**
				 *   L'appel de cette fonction change pour afficher une barre particulière,
				 *   celle que l'on a appelé 'secondaire'.
				 */
				dynamic_sidebar( "sidebar-right" );

			}
		?>

</ul>
</div>