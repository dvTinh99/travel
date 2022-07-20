<?php 

function register_menu() {
	register_nav_menu('header-menu',__( 'Header menu' ));
	register_nav_menu('footer-menu',__( 'Footer menu' ));
	register_nav_menu('sidebar-menu',__( 'SideBar menu' ));
	register_nav_menu('category-menu',__( 'Category menu' ));
	register_nav_menu('filter-menu',__( 'Filter menu' ));
	
	if (function_exists('register_sidebar')){
		register_sidebar(array(
		'name'=> 'Cột bên',
		'id' => 'sidebar',
		));
	}
}
add_action( 'init', 'register_menu' );
	
add_theme_support( 'post-thumbnails' );