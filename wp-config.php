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
define('AUTH_KEY', 'l.SA4J0,vIcoVDTA?2BYNqrK)Zl)9fnNGB:oHBKr8S^;;%>FaAEYyqqrM7Nnobf+');
define('SECURE_AUTH_KEY', 'i+2Nx6cQt:)B|@/DHQ;X@62Hk@NI6/Ue$GqtqJ*._ZPkCutEs9RtQ%i0ujdJ,kyc');
define('LOGGED_IN_KEY', 'z?8L[J;jh,%:i>j7_RA`1lk):JZYM)rD0+{bC.TAu^MC+k)|<;ljKEL<qX%@QD$K');
define('NONCE_KEY', 'z}4e|+_mnOuz>34}EYwdf62nZgD[%Uf*c`JtM>cC4b<rAG>8#!u~W=^^>E^3bWQ9');
define('AUTH_SALT', 'u F#EDx]~{l8f`@;[IIQl84{n$M;dNd[|.WM1rb[SI t_xh$yUIP0NkNPZ<~ol);');
define('SECURE_AUTH_SALT', 'Re(7 e}=|?AI_z8qxX|_hkmyHR)MP=9n.,zAh?}jz#|EA%Fd^^:.<HQHwQ)RB}CV');
define('LOGGED_IN_SALT', 'aRZ*{qUrW.we{zO}:<,. r&nP.RdWc+mi=tZp<@zF:xl$.XE *V({!WHz[=;(^%n');
define('NONCE_SALT', '80KQ% =bS2|=D-+T,Vv|+l1A}r)e4hp>Zxy]#M</*C1Zkig3..JU5M)E>dsPsEQ`');
define('WP_CACHE_KEY_SALT', 'LNbgWfmz1 aG]C6k~M_ac_8TAa^YS~R.:uPD*^b3$q`AUA:)vQ7D!r40d<g:;+*S');

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


@ini_set( 'memory_limit', '2048M' );
@ini_set('max_execution_time', 120); 
