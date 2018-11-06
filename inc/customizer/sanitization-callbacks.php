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
 * Switch sanitization
 */
function ubik_sanitize_switch( $input ) {
	if ( true === $input ) {
		return 1;
	} else {
		return 0;
	}
}