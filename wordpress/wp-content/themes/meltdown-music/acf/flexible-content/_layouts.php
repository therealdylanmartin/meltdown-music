<?php
global $post;
if(!$current_id) {
    $current_id = $post->ID;
}
while( have_rows('flexible_content', $current_id) ) {
    the_row();
    // Example Thingy Dude
    include( dirname(__FILE__) . '/example.php');
}