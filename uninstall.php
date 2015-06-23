<?php
// If uninstall not called from WordPress exit
if( !defined( 'WP_UNINSTALL_PLUGIN' ) )
exit ();

// deletes anything it can with 'YourWildcardText' in the name from the wp_options
function delete_options_prefixed( $prefix ) {
    global $wpdb;
    $wpdb->query( "DELETE FROM {$wpdb->options} WHERE option_name LIKE '%{$prefix}%'" );


	}
delete_options_prefixed( 'YourWildcardText' );


 ?>
