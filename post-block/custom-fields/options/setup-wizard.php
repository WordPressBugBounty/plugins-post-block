<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_fpblock_setup_wizard';

//
// Create options
//
FPBLOCK::createOptions(
	$prefix,
	array(
		'menu_title'         => 'Setup Wizard',
		'menu_slug'          => 'fancypost_setup_wizard',
		'menu_type'          => 'submenu',
		'menu_parent'        => 'fancypost-init',
		'sticky_header'      => false,
		'show_bar_menu'      => false,
		'show_search'        => false,
		'show_network_menu'  => false,
		'show_reset_section' => false,
		'ajax_save'          => false,
		'save_defaults'      => false,
		'show_reset_all'     => false,
		'show_footer'        => false,
		'menu_position'      => 5,
		'theme'              => 'light',
		'footer_credit'      => __( 'Giving a <a href="https://wordpress.org/plugins/" target="_blank">&#9733;&#9733;&#9733;&#9733;&#9733;</a> rating to this plugin.', 'post-block' ),
		'class'              => ( 'PRESTIGE' === FPPB_COPY ) ? 'frhd-fp-copy-pro' : 'frhd-fp-copy-lite',
	)
);

//
// Setup Wizard.
//
FPBLOCK::createSection(
	$prefix,
	array(
		'title'  => 'Setup Wizard',
		'fields' => array(

			array(
				'type'     => 'callback',
				'function' => 'my_callback_function',
			),
		),
	),
);

function my_callback_function() {

	echo '<h1>Welcome to FancyPost</h1>
	<p>Thank you for choosing FancyPost - the most powerful drag & drop WordPress post builder in the market.</p>';
}
