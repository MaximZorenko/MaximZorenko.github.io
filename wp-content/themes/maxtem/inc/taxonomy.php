<?php 
	function event_register_taxonomy(){
		register_taxonomy(
			'event-category',
			'event',
			array(
				'label' => 'Colors',
				'public' => true,
				'hierarchical' => true,
				'slug' => 'color'
			)
		);
		
	}
	add_action( 'init', 'event_register_taxonomy');
?>