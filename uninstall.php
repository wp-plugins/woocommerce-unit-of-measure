<?php
/**
 * Delete WooCommerce Unit Of Measure data if plugin is deleted.
 *
 * @since 1.0
 */
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) :
	exit;
endif;
delete_post_meta_by_key( '_woo_uom_input' );
