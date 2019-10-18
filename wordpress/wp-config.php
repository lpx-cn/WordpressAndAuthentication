<?php
/**
 *The base configuration for WordPress
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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '19940522' );

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
define( 'AUTH_KEY',         'Xk=Tl}T6p*dJmht?yfGs3Or/i3^ P:X|-)!|X~&.Jj%1H839>O}PYD`<~]?k>K]E' );
define( 'SECURE_AUTH_KEY',  'LD2RR*#t.H1o:TAcjlA^n@1 dytf.PR*inID[-6l7im2,H,?Ul9YA)G@ZKhsC8?5' );
define( 'LOGGED_IN_KEY',    '-v}f1gf=(i=2k{JM^xNnS(fb7K$A1,z-J;s1To7 vSrc=i*VYqL){Q}Y.M7Bf]6/' );
define( 'NONCE_KEY',        'a2HJ49ytTIt.5ux9Y0.77^/[/%Zwh=,lXy;&Qgl}x@Y#Dc6~}t<01@nE`B kEB9s' );
define( 'AUTH_SALT',        '#N-^rc~eJx[&H@IY*5At#T4uKa&XB%v_h!t?S_6[i@V>]~;d-$S>lGqT50xs#Zm[' );
define( 'SECURE_AUTH_SALT', 'bJ 29uT9,Mb-DH*3`MP*,`j2^I?E56oUIAl?+JrA,*QMnu=2.)Y{,+$?Q/)7+]@(' );
define( 'LOGGED_IN_SALT',   ';D@8aR@71$yb#df^2<qytbEMQoLEhEGhClA}6d+ do[d49_$4W+T~Y#fvf0YipYq' );
define( 'NONCE_SALT',       '-*f-S.p:usil-a*fO%4*u5k7lZdNM(7w/98|t^Z_8nTN`q>}ZPdAA7hWxR1)m;QW' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

