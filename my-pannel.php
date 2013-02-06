<?php
add_action('admin_menu' , 'my_pannel');

function my_pannel () {
	add_menu_page('Option pannel', 'Theme options', 'activate_plugins', 'my-pannel', 'render_pannel', null, 81);

}

function render_pannel () {
	if(isset($_POST['pannel_update'])){
		if(!wp_verify_nonce($_POST['pannel_noncename'], 'my-pannel')){
			die('Token non valide');
		}
		foreach($_POST['options'] as $name => $value) {
			if(empty($value)){
				delete_option($name);
			}
			else{
				update_option($name, $value);
			}
			
		}
		?>
			<div id="message" class="updated fade">
				<p>Options are saved</p>
			</div>
			<?php
}
	?>
	<div class="wrap theme-option-page">
		<div id="icon-options-general" class="icon32"><br></div>
		<h2>Boot Start Theme Option</h2>
		<form action="" method="post">

			<div class="theme-options-group">
				<table cellspacing="0" class="widefat options-table">
					<thead>
						<tr>
							<th colspan="2">Style options</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">
								<label for="twitter">Twitter</label>
							</th>
							<td>
								<input type="text" id="twitter" name="options[twitter]" value="<?= get_option('twitter' , ''); ?>" size="75">

							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="facebook">Facebook</label>
							</th>
							<td>
								<input type="text" id="facebook" name="options[facebook]" value="<?= get_option('facebook' , ''); ?>" size="75">

							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="title-color">Titles color</label>
							</th>
							<td>
								<input type="text" id="title-color" name="options[title-color]" value="<?= get_option('title-color' , ''); ?>" size="75">

							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="header">Header color</label>
							</th>
							<td>
								<input type="text" id="header" name="options[header]" value="<?= get_option('header' , ''); ?>" size="75">

							</td>
						</tr>
						<tr>
							<th scope="row">
								<label for="copyright">Copyright text</label>
							</th>
							<td>
								<input type="text" id="copyright" name="options[copyright]" value="<?= get_option('copyright' , ''); ?>" size="75">

							</td>
						</tr>
						
					</tbody>		
				</table>
			</div>
			<input type="hidden" name="pannel_noncename" value="<?= wp_create_nonce('my-pannel'); ?>">
			<p class="submit">
				<input type="submit" name="pannel_update" class="button-primary autowidth" value="Save options">
		</form>	

	</div>
	<?php
}