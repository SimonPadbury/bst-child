<?php
/*
This child theme needs top instruct WordPress where to find the stylesheet, as below.

Notice that the 'add_action' line ends with '101'? This guarantees that the child stylesheet 
(bst-child.css') is added to the webpage <head> AFTER the BST parent theme stylesheets.
(Because in the BST enqueue, the 'add_action' line ends with '100'.)
*/

function bst_child_enqueues() {

	wp_register_style('bst-child', get_bloginfo('stylesheet_directory') . '/css/bst-child.css', false, null);
	wp_enqueue_style('bst-child');

  /* Enqueue your own styles and scripts in here */

}
add_action('wp_enqueue_scripts', 'bst_child_enqueues', 101);

?>
