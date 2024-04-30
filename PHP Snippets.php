<?php
// Snippet to stop repeater from including the current post itself -- Used for related posts
add_action( 'pre_get_posts', function ( $query ) {
	if ( ! is_admin() && ! $query->is_main_query() ) {
		$query->set( 'post__not_in', array( get_the_ID() ) );
	}
} );
?>

<?php
// Snippet to display an ID based on URL paramter -- change #downloadGuideButton to whatever
  if( $_REQUEST['download'] == 1){
    echo '<style>#downloadGuideButton{display:block!important;}</style>';
  }
?>