<?php
/**
 * @file
 * Platform.sh example settings.php file for Drupal 7.
 */

// Recommended PHP settings.
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
ini_set('pcre.backtrack_limit', 200000);
ini_set('pcre.recursion_limit', 200000);

// Default Drupal 7 settings.
//
// These are already explained with detailed comments in Drupal's
// default.settings.php file.
//
// See https://api.drupal.org/api/drupal/sites!default!default.settings.php/7
$databases = array();
$update_free_access = FALSE;
$drupal_hash_salt = '';

// Set Drupal not to check for HTTP connectivity.
$conf['drupal_http_request_fails'] = FALSE;

// Include local settings.
if (file_exists(__DIR__ . '/settings.local.php')) {
  require_once(__DIR__ . '/settings.local.php');
}

// Include special Platform.sh settings.
// These come last so that they can override anything.
$on_platformsh = getenv('PLATFORM_PROJECT') !== FALSE;
if ($on_platformsh && file_exists(__DIR__ . '/settings.platformsh.php')) {
  require_once(__DIR__ . '/settings.platformsh.php');
}

