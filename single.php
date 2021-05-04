<?php 
/** single.php 
  * The Template for displaying all single posts 
  */ 
$context = Timber::context(); 
$timber_post = Timber::get_post(); 
$context['post'] = $timber_post; 
Timber::render( 'single.twig', $context );
