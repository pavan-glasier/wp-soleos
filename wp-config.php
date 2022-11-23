<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soleos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c4U0uaiRPeNEeEqec3j0X7CmQA4oVhJQ3i3NS14tvdg8NKPUzeEy0WTF4ZR9H6dj' );
define( 'SECURE_AUTH_KEY',  'cC160ahxsBXzEsZl8LoqkVIDop83wYVLl6ZoHxgg9k6M4MgtFP3HEpt2DfPDKrLw' );
define( 'LOGGED_IN_KEY',    'W1qdThyMWIpFgvcv1dlVONhGhLXxZzpF9sMlIuLeE06BEdDefssPGmwcod3wkSPB' );
define( 'NONCE_KEY',        'W2AUNzzHR51w3kiEuVInuFyyuc3E7MfneIdqTXOacPeZAM2XlR6M1e6c8DbKo61I' );
define( 'AUTH_SALT',        'K4HakYwnsveNcOY4gbMChhijHPritL5JQ5ppHNHmJmgX1K0XObORRUv6ntCdmYQ4' );
define( 'SECURE_AUTH_SALT', 'EAQD4j1FdTESEYmkpFuXvwNCpRbGdnUgGReWGsaVgYRDG1Uk64unrG13mAV4m2Rh' );
define( 'LOGGED_IN_SALT',   'SpoOL9U5vQZUPj6R4eJ1cubvNgIRt1p4Fw6EDvyHP0E2wUrTJqED06nxO3pNfjJM' );
define( 'NONCE_SALT',       'rUD2CM6w63dy84Qc5hMWc3TblxPWflC2p4HxzWfFvHQYiIDBHjHk55ngO6xwEFei' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
