<?php 
add_action('after_setup_theme', 'rm_setup');

function rm_setup(){
  add_theme_support('custom-logo', array(
    'uploads' => true
  ));
}
?>