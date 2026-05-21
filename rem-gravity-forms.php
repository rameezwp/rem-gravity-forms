<?php
/*
Plugin Name: REM - Gravity Forms Dynamic Fields
Plugin URI: https://wp-rem.com
Description: Dynamically populates Gravity Forms hidden fields for REM Property listings.
Version: 1.0
Author: WebCodingPlace
License: GPL2
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Agent Email
 */
add_filter( 'gform_field_value_agent_email', 'rem_gf_populate_agent_email' );

function rem_gf_populate_agent_email( $value ) {

    if ( is_singular( 'rem_property' ) ) {

        $post_id   = get_the_ID();
        $author_id = get_post_field( 'post_author', $post_id );

        return get_the_author_meta( 'user_email', $author_id );
    }

    return $value;
}


/**
 * Listing Title
 */
add_filter( 'gform_field_value_listing_title', 'rem_gf_populate_listing_title' );

function rem_gf_populate_listing_title( $value ) {

    if ( is_singular( 'rem_property' ) ) {

        return get_the_title( get_the_ID() );
    }

    return $value;
}


/**
 * Agent Phone
 */
add_filter( 'gform_field_value_agent_phone', 'rem_gf_populate_agent_phone' );

function rem_gf_populate_agent_phone( $value ) {

    if ( is_singular( 'rem_property' ) ) {

        $post_id   = get_the_ID();
        $author_id = get_post_field( 'post_author', $post_id );

        return get_user_meta( $author_id, 'rem_mobile_url', true );
    }

    return $value;
}