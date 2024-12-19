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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Str0ng!P@ss123' );

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
define( 'AUTH_KEY',         ']>sbJ#wILJ43H-lK!g2wP?4(&e00z3>(wI`C81/~[M8 =|2m}^pMgz $zV-tAi--' );
define( 'SECURE_AUTH_KEY',  'az$8]:U]N.gHiao^Q9y(iZS`eOdOq{fP&M|29@gYioJ7R.;DB1_=Y+pLY}46sWq!' );
define( 'LOGGED_IN_KEY',    '}feM] `S(,yIpvWwWi=m()sC>vu5_m*VHQUD?-@yICUnG(+X$B,UfoK.KW|rk8B;' );
define( 'NONCE_KEY',        '(`O(Xa>1% @tz[|CQ^MFITS]Z~woSdM=#;Tc<;o|f;XX!T/G2/%+~$,EF?k)M!lH' );
define( 'AUTH_SALT',        'mh?y%lEeQbX;OVDm,N:i1Mxc]$Au7DvHv{;]Q1KC*P ^@v;+t]oWb4{W#&Ftk@Um' );
define( 'SECURE_AUTH_SALT', '6Rx[T{q6;r [RsOomX{[=,6z%^a!VRb!dFxp(~cW}58?U8(Xf]18(a0S==e<>J%3' );
define( 'LOGGED_IN_SALT',   '|f{3<Z-R}*OA}Y&$j6>+1z/D?n;6#|Km0>:PX$* },}{_<Y0PKL*IU_f9s}z$fZ]' );
define( 'NONCE_SALT',       'hdz(@#6@YI9#2qvBr/KxPG!&dB+V0$&s7j6SXrQ#p8SAi}>$X3.Qn-%-Z,7y+)?5' );

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
