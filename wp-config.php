<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
require_once __DIR__ . '/env.php';

ini_set('display_errors', $_ENV['display_errors']);
error_reporting($_ENV['error_reporting']);
define('WP_DEBUG_DISPLAY', $_ENV['WP_DEBUG_DISPLAY']);

define('WP_DEBUG', $_ENV['WP_DEBUG']);

define('FS_METHOD', $_ENV['FS_METHOD']);

define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);

define('WP_HOME', $_ENV['WP_HOME']);
define('WP_SITEURL', $_ENV['WP_SITEURL']);

define('WP_HTTP_BLOCK_EXTERNAL', $_ENV['WP_HTTP_BLOCK_EXTERNAL']);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'AUTH_KEY goes HERE!!!!');
define('SECURE_AUTH_KEY', 'SECURE_AUTH_KEY goes HERE!!!!');
define('LOGGED_IN_KEY', 'LOGGED_IN_KEY goes HERE!!!!');
define('NONCE_KEY', 'NONCE_KEY goes HERE!!!!');
define('AUTH_SALT', 'AUTH_SALT goes HERE!!!!');
define('SECURE_AUTH_SALT', 'SECURE_AUTH_SALT goes HERE!!!!');
define('LOGGED_IN_SALT', 'LOGGED_IN_SALT goes HERE!!!!');
define('NONCE_SALT', 'NONCE_SALT goes HERE!!!!');
define('WP_CACHE_KEY_SALT', 'WP_CACHE_KEY_SALT goes HERE!!!!');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = $_ENV['DB_PREFIX'];

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
