<?php

/**
 * Plugin Name:     Lifter LMS Multitenancy Add-on
 * Description:     A Multitenancy add-on for Lifter LMS
 * Version:         0.0.1
 * Requires PHP:    7.4
 * Author:          Mohan Raj <praem1990@gmail.com>
 * Author URI:      https://github.com/praem90
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/vendor/autoload.php';

$liftermt = new \Lifter\MT\LifterMt();

$liftermt->with_basename( plugin_basename( __FILE__ ) );

$liftermt->boot();
