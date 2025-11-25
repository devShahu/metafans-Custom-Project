<?php
require_once 'class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'metafans_register_required_plugins');

function metafans_register_required_plugins() {
	
	$plugins = array(
		array(
			'name'               => esc_html__('Envato Market (theme updates)', 'metafans'),
			'slug'               => 'envato-market',
			'source'             => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
			'required'           => false,
			'force_activation'   => false,
			'force_deactivation' => false,
			'external_url'       => ''
		),
	);

	$config = array(
		'id'           => 'metafans-themes',
		'default_path' => '',                          // Default absolute path to pre-packaged plugins
		'parent_slug'  => 'themes.php',
		'menu'         => 'install-required-plugins',  // Menu slug
		'has_notices'  => true,                        // Show admin notices or not
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '<div class="notice-warning notice"><p>Install the following required or recommended plugins to get complete functionality from your new theme.</p></div>',                      // Message to output right before the plugins table.
		'strings'      => array(
		'return'       => esc_html__( 'Return to Theme Plugins', 'metafans' )
		)
	);

	tgmpa($plugins, $config);

}