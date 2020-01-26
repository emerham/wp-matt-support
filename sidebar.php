<?php
/**
 * The Template for the sidebar containing the main widget area
 *
 * @package  WordPress
 * @subpackage  Timber
 */
$context            = [];
$context['sidebar'] = Timber::get_widgets( 'sidebar' );
Timber::render( array( 'sidebar.twig' ), $context );
