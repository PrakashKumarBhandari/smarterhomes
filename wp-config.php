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
define( 'DB_NAME', 'smarter' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'V0N;3=**rxN[vbQ2{i[6Sk3bpMsT/feb}5u2M^agsJp:DB2xkAz|QA[i`1O(B`W^' );
define( 'SECURE_AUTH_KEY',  'E/bUYc8I652[O$8$,<cf3h7T4CuCR)jHWNN)}Uy^jFL^b~MK_wG42!/HWIV29H*X' );
define( 'LOGGED_IN_KEY',    'ripC cX=ziy=+VVaF0$5gXEyR[oVPxp;6r{Z@PvBQB_ ]oZLT(&5%h2YAqU[Y`sK' );
define( 'NONCE_KEY',        '_5mPLBdG{vsc>hp,qKee/+ZOyy/H|.1?R@6HlCH8Qid7}m]Fj+6,ev1u+|NT@,2I' );
define( 'AUTH_SALT',        '$BX|(|z+AIOZkc&pMoF}Vq[ET-0I72yg$NGRd9;ovCMq0)yIUknS~?HqYZU?hs9^' );
define( 'SECURE_AUTH_SALT', '~`*23B1p*z~,bO}+j#{GbLJEiP+5$gh_;m wuyW}COk[1!<3t?~F,X6 /OU z0N&' );
define( 'LOGGED_IN_SALT',   'sA;<K@h8&t0qMK#%8_LS,up}U&<KC;RWIXQpz?_]cwK+3S^IT!)@T )u iu^t*u,' );
define( 'NONCE_SALT',       'u_9@GErfgwaD<P,vQv>>%T1n)QZ,f/*wnXb>o+{QD~$,A{)pdDi5eHT~Zimxhwz_' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
