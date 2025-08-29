<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'EX]P =.eAXwWu<K0QDqQ}.Ae{RP$[#S0J OU;Z=iM1etD}d|oc8/%A<,<GTUB]p/' );
define( 'SECURE_AUTH_KEY',  'UuzQ0$6G.rtiOcbc4,okHgFY/lJ k37{wIDhk,Z7N#0 KRN~9*qeu;Y)n1k1Ua6B' );
define( 'LOGGED_IN_KEY',    '!;}!QXHLkg$wg.1vhmzk)39!;b18c!fp`!C [s3f9t4-|HSFkk}c!pWIT%m:/VI1' );
define( 'NONCE_KEY',        'vg$S;J`+3)S7~NRx,Dx9(ZhytkS@rN3wk}wR|<IN9<7B/y%2cPM%IG!sm+QM&?Ui' );
define( 'AUTH_SALT',        'f8b7iw%)H|a5zHmCHC^6N@xK?nq$(d;qp2WxlM%O332*}%L6z~59UFSC~0Om56s`' );
define( 'SECURE_AUTH_SALT', 'q-iPaYp9]1&!Y.bbt)6R3&OD_*~0XsMAA1t>LNJf>tX7BKVfQ6tkB0!SZ)a/ #9Q' );
define( 'LOGGED_IN_SALT',   't>/U>aIAw:bFMfVH@w$/lHkm|a9B5Oc<`6`Pg,FQ!u5q4 #)|b9`VDs}!o7TJ2jB' );
define( 'NONCE_SALT',       'Rmo=1LPC!}8x)RQV5>2_G@oD6VRm$zFORSyX$nM}@aM#ot%as.r_0R3n<.iQg4_P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
