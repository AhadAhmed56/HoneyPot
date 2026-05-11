<?php

function mytheme_register_nav_menu(){
	register_nav_menus( array(
		'header_menu' => __( 'Header Menu', 'text_domain' ),
		'footer_quick' => __( 'Footer Quick', 'text_domain' ),
		'footers_account' => __('Footer Account', 'text_domain')
	) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );


?>