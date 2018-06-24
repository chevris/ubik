<?php
/**
 * Sanitization Callbacks
 * 
 * @package Ubik WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/** 
 * [ Table of contents ]
 *	ubik_sanitize_number()
 *	ubik_sanitize_number_blank()
 *	ubik_sanitize_select()
 *	ubik_sanitize_multi_choices()
 *	ubik_sanitize_checkbox()
 *	ubik_sanitize_image()
 *	ubik_sanitize_switch()
 */

/**
 * Number sanitization callback
 *
 * @since 1.0.0
 */
 function ubik_sanitize_number( $val ) {
	return is_numeric( $val ) ? $val : 0;
}

/**
 * Number with blank value sanitization callback
 *
 * @since 1.0.0
 */
function ubik_sanitize_number_blank( $val ) {
	return is_numeric( $val ) ? $val : '';
}

/**
 * Select sanitization callback
 *
 * @since 1.0.0
 */
 function ubik_sanitize_select( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );
	
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Select choices sanitization callback
 *
 * @since 1.0.0
 */
 function ubik_sanitize_multi_choices( $input, $setting ) {
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	$input_keys = $input;

	foreach ( $input_keys as $key => $value ) {
		if ( ! array_key_exists( $value, $choices ) ) {
			unset( $input[ $key ] );
		}
	}

	// If the input is a valid key, return it;
	// otherwise, return the default.
	return ( is_array( $input ) ? $input : $setting->default );
}

/**
 * Checkbox sanitization callback
 *
 * @since 1.0.0
 */
 function ubik_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

/**
 * Image sanitization callback
 *
 * @since 1.0.0
 */
function ubik_sanitize_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}

/**
 * Switch sanitization
 */
function ubik_sanitize_switch( $input ) {
	if ( true === $input ) {
		return 1;
	} else {
		return 0;
	}
}