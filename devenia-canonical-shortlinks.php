<?php
/**
 * Plugin Name: Devenia Canonical Shortlinks
 * Description: Emits canonical permalinks for WordPress shortlink output so scanners and crawlers see the direct 200 URL instead of ?p= redirects.
 * Version: 1.0.0
 * Author: Devenia
 * License: GPL-2.0-or-later
 * Text Domain: devenia-canonical-shortlinks
 *
 * @package DeveniaCanonicalShortlinks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_filter(
	'get_shortlink',
	static function ( $shortlink, $id, $context, $allow_slugs ) {
		$post_id = (int) $id;

		if ( $post_id <= 0 && is_singular() ) {
			$post_id = (int) get_queried_object_id();
		}

		if ( $post_id <= 0 ) {
			return $shortlink;
		}

		$permalink = get_permalink( $post_id );

		return $permalink ? $permalink : $shortlink;
	},
	10,
	4
);
