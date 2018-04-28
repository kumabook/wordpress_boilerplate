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

// ** MySQL settings ** //
define( 'DB_NAME'    , getenv('DB_NAME') );
define( 'DB_USER'    , getenv('DB_USER') );
define( 'DB_PASSWORD', getenv('DB_PASS') );
define( 'DB_HOST'    , getenv('DB_HOST') );
define( 'DB_CHARSET' , 'utf8' );
define( 'DB_COLLATE' , '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_PREFIX');

if ( getenv('ENV') != 'production' ) {
	define( 'WP_DEBUG'        , true );
	define( 'WP_DEBUG_DISPLAY', true );
	define( 'WP_DEBUG_LOG'    , true );
}

define( 'AUTH_KEY'        , getenv('AUTH_KEY') );
define( 'SECURE_AUTH_KEY' , getenv('SECURE_AUTH_KEY') );
define( 'LOGGED_IN_KEY'   , getenv('LOGGED_IN_KEY') );
define( 'NONCE_KEY'       , getenv('NONCE_KEY') );
define( 'AUTH_SALT'       , getenv('AUTH_SALT') );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') );
define( 'LOGGED_IN_SALT'  , getenv('LOGGED_IN_SALT') );
define( 'NONCE_SALT'      , getenv('NONCE_SALT') );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';