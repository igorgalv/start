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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+#9}}bx`tPL4);vE>X.3=G,8&BE$BokAyIIp^V4OS:k#E_1+,D-0=hn0fek[gj$=' );
define( 'SECURE_AUTH_KEY',   'Q8/=&XhQ3JWQGMA-?4g#qewu:*SCR(Q?HHuOtHL:gz5zUym~o8G }i8KUQN6^gg?' );
define( 'LOGGED_IN_KEY',     ']HKAfR1t!M,qd_4B_b v[Pd4MK5x5`wtG>/F|enO^blotZopKZ?{S%15+MIY1=})' );
define( 'NONCE_KEY',         'mTRLKEo7X| c!+b/.N.FT7!ixPbeDY~UfHQbxh+g/q,|(MQVwR<Y%5A}<o=D5+Q:' );
define( 'AUTH_SALT',         'vDG?{Lirx>0ClU+x!Mq7[9)^Y^N%S6%VW5s1@-@7!_xM|Zc*$|f9Tqe`A-3`#I6z' );
define( 'SECURE_AUTH_SALT',  '8[i_nJCPTXrpgAZiy!JKA0]z9ih?sUK:OES~PHwDiKRlAJPkfr4v<4vRXa|qZpp*' );
define( 'LOGGED_IN_SALT',    'X(+dsg2,N6l69,.}ot2Pnq`Edx/FaInjF]4aoie>*0n2/U1~:2c%+=y`>Cj14L[R' );
define( 'NONCE_SALT',        ']6%)JZC5O$<D3 O:*`r7LuhDXR5$%=|#o_x>OHBWDmw$;+Z(t$HQ1$3%S0]xmVpk' );
define( 'WP_CACHE_KEY_SALT', 'pO0Zkow/vw{(06VCAf+)6pRGr#5A;zg9>p}iw?/2T75e5Z&FIKa 9sP2:ftZr@Nx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
