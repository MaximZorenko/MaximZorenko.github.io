<?php
/*
***POST Gallery
*/
function maxtem_gallery_post_type(){
	register_post_type('gallery',array(
		'label' => 'Gallery',
		'hierarchical' => true,
		'public' => true,
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array(
			'title',
			'thumbnail',
			'comments',
		),
	));

		register_post_type('event',array(
		'label' => 'Events',
		'hierarchical' => true,
		'public' => true,
		'menu_position' => 4,
		'has_archive' => true,
		'supports' => array(
			'title',
			'comments',
			'editor',
			'excerpt', 
		),
	));
}
// допустим в functions.php мы регистрируем дополнительный размер так:

add_action('init','maxtem_gallery_post_type');


/*
*TEST POST
*/
function test_post_type(){
	register_post_type('Test',array(
		'label' => 'Test',
		'public' => true,
		'menu_position' => 4,
		'supports' => array(
			'title',
			'editor', 
			'comments', 
			'revisions', 
			'trackbacks',
			'author',
			'excerpt', 
			'page-attributes', 
			'thumbnail', 
			'custom-fields', 
			'post-formats'
		),
	));
}

add_action('init','test_post_type');





?>