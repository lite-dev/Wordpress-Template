<?php
function main_style() {
	wp_enqueue_style( 'Theme Name', get_template_directory_uri() . '/style.css' );
}
function extra_style() {
	wp_enqueue_style( 'Extra', get_template_directory_uri() . '/extra.css' );
}
register_nav_menus( array( 
	'header_menu' => 'Header Navigation Menu',
	'mobile_header' => 'Mobile Header Menu',
	'sidebar_menu' => 'Sidebar Navigation Menu',
	'footer_menu' => 'Footer Navigation Menu',
	'mobile_footer' => 'Mobile Footer Menu',
	)
);
register_sidebars( array(
	'name' => 'Main Sidebar',
	'id' => 'main_sidebar',
	)
);
function theme_cp() {
	echo '<h1>Control Panel</h1>
<form>
<fieldset>
<legend>Slider</legend>
<input type="file" name="slimgs" /><input type="file" name="slimgs" /><input type="file" name="slimgs" />
</fieldset>
<fieldset>
<legend>Sidebar Position</legend>
<label for="sideposleft">Left </label><input id="sideposleft" type="radio" name="sidepos" checked />
<label for="sideposright">Right</label><input id="sideposright" type="radio" name="sidepos" />
add_action( 'admin_menu', 'theme_adder' );