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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_theam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|sz8uD~I],_lh_}~9X?@Z!:qmnI=denle9{Q.D9TA?Lb!Ny=HT$bzFi=%[pZcWgG' );
define( 'SECURE_AUTH_KEY',  'VOeJ0rmVLlbP%9W=-k31&AySJD@C&=]Z.:0C)Nn27},ZUOo[UEb; 50Z]Q?J55)x' );
define( 'LOGGED_IN_KEY',    'p/x;Qh0?H!Hh.l{g.eC6+aeb/qBDTOntU@oC?sce:SB<0JBVW`?6a?re/pmd+a3V' );
define( 'NONCE_KEY',        '4f=+`XU(=r/!u!NqC%G)0)j8|m~qoiN[j2REN<d2e3a9y@HK+U2t~ZPsP%@aO0]G' );
define( 'AUTH_SALT',        '$@jM[D0:WJ]v1[zCj6e<T1=&-uZ0ZR6ttg6siI/^5z`[>x$=01avq(:j+6bn3$~k' );
define( 'SECURE_AUTH_SALT', '3]jw/_lZ8I>N*i qT,=:D<L~Un0]9f;P0ZU&]&ZbT 2dvL1k&QqlG%Z%dB#8$V&h' );
define( 'LOGGED_IN_SALT',   'E^s*bIjI~wg]6?m}9yf2kKW#v26SLQyb/gFJqe2W^Q3CTAn6B-eZsHTtj-Rn{1AE' );
define( 'NONCE_SALT',       'JQ}?b~QNynjdAKWg:{eg3%-sCAgt1dJ3^%x46D/g25<O di}-9;+?k)KVp4u*cv=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
