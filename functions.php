<?php
/**
 * @package    Alice
 * @version    2.0.0-dev
 * @author     Anand Kumar <anand@anandkumar.net>
 * @copyright  Copyright (c) 2013 - 2018, Anand Kumar
 * @author     Justin Tadlock <justintadlock@gmail.com>
 * @copyright  Copyright (c) 2013 - 2018, Justin Tadlock
 * @link       http://www.blogsynthesis.com/themes/alice
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'alice_theme_setup', 11 );

function alice_theme_setup() {

        /* Change default background color. */
        add_theme_support( 'custom-background', array( 'default-color' => 'f7f7f7' ) );			
				
        /* Add a custom default color for the "primary" color option. */
        add_filter( 'theme_mod_color_primary', 'alice_color_primary' );
		
			/* Change default custom header */
			add_theme_support(
				'custom-header', 
				array ( 
				'default-image'   => '%2$s/images/headers/Galaxy-Cluster-Abell-520.jpg'
			) );
		
			// Registers default headers for the theme.
			register_default_headers(
				array(
					'lagoon-nebula' => array(
					'url'           => '%2$s/images/headers/Lagoon-Nebula.jpg',
					'thumbnail_url' => '%2$s/images/headers/Lagoon-Nebula-thumb.jpg',
					// Translators: Header image description.
					'description'   => __( 'Lagoon Nebula', 'alice' )
				),
					'abell-520' => array(
						'url'           => '%2$s/images/headers/Galaxy-Cluster-Abell-520.jpg',
					'thumbnail_url' => '%2$s/images/headers/Galaxy-Cluster-Abell-520-thumb.jpg',
						// Translators: Header image description.
						'description'   => __( 'Galxy Cluster Abell 520', 'alice' )
					),
				)
			);
}

/**
 * Returns a default primary color if there is none set.  We use this instead of setting a default
 * so that child themes can overwrite the default early.
 *
 * @since  1.0.0
 * @param  string  $hex
 * @return string
 */
function alice_color_primary( $hex ) {
	return $hex ? $hex : '1897a0';
}
