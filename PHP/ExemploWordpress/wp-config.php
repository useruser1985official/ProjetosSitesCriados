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
define( 'DB_NAME', 'exemplo_wordpress' );

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
define( 'AUTH_KEY',         '%r7r3wQaM=5ksigbWjY,wCO4n|q}qR1P_=?Nr.U?b`.X (}#{Y4W27K6i1RoR6p.' );
define( 'SECURE_AUTH_KEY',  'sa-LJ<;!U:X/S]6[N;?X#%p=m=fK {:Xe)QL[!PV$1g,)9dA_4%^o+q]F}>B7I_r' );
define( 'LOGGED_IN_KEY',    'BFY%`uIyp>K|&z.%?1Z./(H**rj/T;&Xv69,/LFd18jd_j!k]{M1m1-WvM9R7Kb?' );
define( 'NONCE_KEY',        '*nYAcg8SJ*V#1l_ppL0&0/4vs&KaL5W)@G_ad0O%We2~>t8O}AJLks)V2cklAl6Z' );
define( 'AUTH_SALT',        '|e+`<_,9fU=7sl:Z|*GTH<^@^/Bi@83j;FYUGH8I{CdiYDG_8~`Je0(sB?#g/n,K' );
define( 'SECURE_AUTH_SALT', 'j0{[2cG:z>hnJ(+{2e`j6s2VH&z_o?38nb8BT7<~`3^tfX%PIN/j9h4YU0*;vaUk' );
define( 'LOGGED_IN_SALT',   'WMBE$4f!$7:~;udwZAR[{/<FAqW+Fa1f[cGLr$b_wp<eWxg8rW:1x`O%Ftt7j(7h' );
define( 'NONCE_SALT',       'ClNNVy#sGWZ}?1 <|e7f$R|u.F*7IBe8VGY|CZ;dS~<W(y]SM#Q:=QpE+$y=rPg]' );

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
