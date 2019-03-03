<?php

/**
 * Plugin Name: Replace Thumbnail with oEmbed
 * Description: This plugin checks, if the first line of the content is a valid oEmbed URL. If that is the case, it replaces the thumbnail image with the oEmbed element (e. g. with a YouTube video). Now you don’t have to care too much about a thumbnail image, since instead you would see the video or any other oEmbed content. You can even e. g. watch videos on your blogs front page without opening the post. Works for all WordPress contents, which have a thumbnail set and are not password protected. The active WordPress Theme must use the_post_thumbnail() or get_the_post_thumbnail() functions for this to work!
 * Version:     1.2.5
 * Author:      Palasthotel <rezeption@palasthotel.de> (Kim-Christian Meyer)
 * Author URI:  https://palasthotel.de
 * License:     GNU General Public License v3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * @copyright   Copyright (c) 2019, Palasthotel GfdPmbH Berlin
 */


add_filter( 'post_thumbnail_html', 'replace_thumbnail_with_oembed_apply' );
function replace_thumbnail_with_oembed_apply( $html ) {
	if ( is_attachment() || ! has_post_thumbnail() || post_password_required() ) {
		return $html;
	}

	$oembed_html = replace_thumbnail_with_oembed_replace_first_line_of_content_with_oembed();
	if ( $oembed_html === false ) {
		return $html;
	}

	return $oembed_html;
}


/**
 * Checks, if first content line is a URL and replaces it with oEmbed code, if
 * available.
 */
function replace_thumbnail_with_oembed_replace_first_line_of_content_with_oembed() {

	$content = get_the_content();

	// Remove line-breaks and whitespace at the beginning of the content.
	$content = ltrim( $content );
	$first_line = rtrim( strtok( $content, "\n" ) );

	// Break, if first line of the content is NOT a URL.
	if ( filter_var( $first_line, FILTER_VALIDATE_URL ) === false ) {
		return false;
	}

	$embed_html = wp_oembed_get( $first_line );

	if ( $embed_html === false ) {
		// Remove filter to be safe, could have been set before.
		remove_filter( 'the_content', 'replace_thumbnail_with_oembed_remove_first_line' );
		return false;
	}
	add_filter( 'the_content', 'replace_thumbnail_with_oembed_remove_first_line', - 90 );

	return $embed_html;
}


/**
 * Removes the first line from a string.
 */
function replace_thumbnail_with_oembed_remove_first_line( $content ) {
	return ltrim( preg_replace( '~ ^.*?\n ~xisu', '', $content ) );
}
