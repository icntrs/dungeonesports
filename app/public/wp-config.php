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
define( 'AUTH_KEY',          'lk$65^CP-@oCuWH~RPgNd5OM733a.#.Rwdiv*)Hj-/-QtK>Bc;%yr=&EbK7(=[*u' );
define( 'SECURE_AUTH_KEY',   's D$`<:S>39+xB?V+3{|!LD3Dm2SmVahlWI,O78:!@,F@oFy,vCi$:k7)8`WDG~U' );
define( 'LOGGED_IN_KEY',     'h}f5cdp5.d%j}B8P?_Tuk6dXv|ac^k-A&F%Vv5Y-qdu)V&Tm<P<upboIyq>3+n%P' );
define( 'NONCE_KEY',         'lgEba:w?FWZe~tE71vV1R_44{!0D2A1I<I9D}A./S<mbVXw`J5)Cw9+FHpZ9mWoJ' );
define( 'AUTH_SALT',         'LiciSf;/P>r;[ _,0K<]r}W$5>pEXU&w<C(Zd a&bE(N&3}Sf5XZ(Hw+5Eu{HpdI' );
define( 'SECURE_AUTH_SALT',  'TnfXn[g;bLay|bLY83/6H``(pv4abvr6MDkjAd{%o;0-7o1UP?-DX6#NW2Zv[!_I' );
define( 'LOGGED_IN_SALT',    '4@%gAh94K{3b)=qN2jzo?eb`YYr])>/=RV#9%GtY&f=S4]VP,n,BMLt_+G0?3)&l' );
define( 'NONCE_SALT',        '05pO0_G`/hMR65y/-?F@:r93_Tj]q61&?w#9^< g[tQ4^;ZMr(<SsJ|>rUOt2VpR' );
define( 'WP_CACHE_KEY_SALT', '{02cn1Lk%sLAywXR`PEC9gW=g5f<(PJ44k0mm]2xN` ]ofCOL{HMY4]+s4ARntes' );


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
