<?php 
if ( !is_admin() ) { return; }

function metafans_demo_import_lists(){
	$demo_lists = array(
		'demo1' =>array(
			'title' => esc_html__( 'Metafans Classic', 'metafans' ),/*Title*/
			'is_pro' => false,
			'type' => 'elementor',
			'author' => esc_html__( 'Tophive', 'metafans' ),
            'template_url' => array(
                'content' => 'https://demo.tophivetheme.com/metafans/wp-content/demo-data/classic/content.json',/*Full URL Path to content.json*/
                'options' => 'https://demo.tophivetheme.com/metafans/wp-content/demo-data/classic/options.json',/*Full URL Path to options.json*/
                'widgets' => 'https://demo.tophivetheme.com/metafans/wp-content/demo-data/classic/widgets.json'/*Full URL Path to widgets.json*/
            ),
			'screenshot_url' => 'https://i.ibb.co/nkbXWbr/classic.jpg',
			'demo_url' => 'https://demo.tophivetheme.com/metafans/classic/',
		),
        /*and so on ............................*/
	);
	return $demo_lists;
}
add_filter('advanced_import_demo_lists','metafans_demo_import_lists');

// add_action( 'advanced_import_before_complete_screen', 'metafans_after_demo_import', 10 );

// function metafans_after_demo_import(){
// 	add_post_meta( 2, 'metafans_check', 'passed', true );
// }
