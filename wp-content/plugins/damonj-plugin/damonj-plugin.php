<?php
/*
Plugin Name: Site Plugin for damonjespersen.com
Description: Site specific code changes for damonjespersen.com
*/
/* Start Adding Functions Below this Line */

function my_home_category( $query ) { if ( $query->is_home() && $query->is_main_query() ) { $query->set( 'cat', '5'); } } add_action( 'pre_get_posts', 'my_home_category' );


/* Stop Adding Functions Below this Line */
?>
