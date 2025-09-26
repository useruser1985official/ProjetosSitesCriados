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
define( 'DB_NAME', 'pizzarie_wp' );

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
define( 'AUTH_KEY',         'O`Lz-U :JKt+.(ByZ_QeRm/D&TZFeyz>X3/t]#@>^5LgF}$ %Y[`2qT;)1AnJ@6b' );
define( 'SECURE_AUTH_KEY',  'OOeCzSCyY{>>cfWb$,n*6VS(8^24vd4u+w>n9-^}]fCLIZ)Ow`}RC%,|Wo5VQEYE' );
define( 'LOGGED_IN_KEY',    'qLSo&(0*GYRY1&R]7U_-Cs/hM|s@)!OB!WAq>j[oTwX(.^cU:4]NNrCjbMoqT;ZW' );
define( 'NONCE_KEY',        'W3gd2`Gn?d2>gll($LlP#eI3IISR9cSVAV|oR$Z3!qI* ZZCYWz2PI;+U&-V|s0`' );
define( 'AUTH_SALT',        'a2z0yNr~8(-^i8F}Kmy!z*N]QjmhEsCUL<w$(*,_x2PUo[/B@*Mkiq{Xy*[9}lpk' );
define( 'SECURE_AUTH_SALT', ':^je^j%)EBtp32mdCd<<jR%UF:`.S+cqG7tF*X2|bvh~U]P$KWY=$#n}U.+`UW^-' );
define( 'LOGGED_IN_SALT',   'B3Qu24KC,8p2-I_v-1AY!<i|7aC93v;9ntH <F0?y5e89udtixc&1pVU1A4oKk@c' );
define( 'NONCE_SALT',       ']c#;NY=$)@rE&0bZm3>Ap3,Y7OcY*/e=kjw6)Tm2j9e=IS#V8b:aKf(_y1]3@AUN' );

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
