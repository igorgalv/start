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
define( 'AUTH_KEY',          'I3./#0roBWLb<(L{!C#n{drgc[B-k4*KJ&POTq$)xTH&7WRO&>TZD2rf9ZQTx~`v' );
define( 'SECURE_AUTH_KEY',   'QG^cCY-RKKGRZHs0Ad,lE^-|]q_i>#a0%Nef0J=Z?JRbi-*]Apfp&hAwq!0HMq`c' );
define( 'LOGGED_IN_KEY',     'JJ`^P~^j#+c9jE`o6^4K7bDLUrj*>L+v}NM)Bv><=j#X^DjyR>@^.oSOFV33@`9S' );
define( 'NONCE_KEY',         't[G)_:hT,R:x1q`}Ikr;Lk|^l2_`>hJpSE^iI{=VjJHB[J:LG[bu1KM[!}6.VT`U' );
define( 'AUTH_SALT',         '?rZ&9WUsVJ>Pj@2X0acM^!@~Gb!y4=Y]Vz-@0q9y%~pZfF(bYdDZ.5&DZ-_{&>xg' );
define( 'SECURE_AUTH_SALT',  'vXwp,8QwWyX{L!R;_7^0.t/dDh7L2L;m $tR[0Bm78fNjb1F0&F8L=D[i[x(r[yo' );
define( 'LOGGED_IN_SALT',    'cAiyK;SQ}b3)0Am[Tt+;]QT@a4&+I:cM(su|?|fXmZ(&dh##@~$NY%[#O:vp%-+?' );
define( 'NONCE_SALT',        '5bEbEk0Xy^m.1<8.|.YN/.u~B,PO*C[7htQh6yZf$h:2lN/,o)~i-kUu4laKtw<2' );
define( 'WP_CACHE_KEY_SALT', 'Dz%(v~R!:Fcr%eS&z/Z_npoN#bPN5EIH<km)~}y9jTy8Q:@MZOypb@weg<F}`q5O' );


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
