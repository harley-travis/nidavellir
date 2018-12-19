<?php

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Allow code in text edtiors
function add_mce_markup( $initArray ) {
    $ext = 'i[id|name|class|style]';
    if ( isset( $initArray['extended_valid_elements'] ) ) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }
    return $initArray;
}
add_filter( 'tiny_mce_before_init', 'add_mce_markup' );

// Register Widgets
function midtown_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Site Title', 'midtown' ),
		'id' => 'logo-title',
		'description' => __( 'Enter the title of the site. This will display in the header of the site', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	) );

	register_sidebar( array(
		'name' => __( 'Header Nav', 'midtown' ),
		'id' => 'main-nav',
		'description' => __( 'Select links to display in the main nav. This will display in the header of the site', 'midtown' ),
		'before_widget' => '',
		'after_widget' => ''
	) );
	
	register_sidebar( array(
		'name' => __( 'Mobile Nav', 'midtown' ),
		'id' => 'mobile-nav',
		'description' => __( 'Select links to display in the mobile nav.', 'midtown' ),
		'before_widget' => '',
		'after_widget' => ''
	) );

	register_sidebar( array(
		'name' => __( 'Footer Contact Info', 'midtown' ),
		'id' => 'footer-contact-info',
		'description' => __( 'Enter the contact info. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Links', 'midtown' ),
		'id' => 'footer-links',
		'description' => __( 'Enter the links. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
	) );
	
	register_sidebar( array(
		'name' => __( 'Copyright', 'midtown' ),
		'id' => 'copyright',
		'description' => __( 'Enter the copyright info. This will display in the footer', 'midtown' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_widget' => '<div class="inline-block">',
		'after_widget' => '</div>'
	) );
	
	remove_filter('widget_text_content', 'wpautop');

}
add_action( 'widgets_init', 'midtown_widgets_init' );




?>