<?php
/**
 * The search form template
 *
 * @package WordPress
 * @subpackage Timber
 */
$context = Timber::context();
$site    = new TimberSite();
Timber::render( 'searchform.twig', $context );

