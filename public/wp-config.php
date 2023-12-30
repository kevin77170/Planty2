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
define( 'AUTH_KEY',          'It^IzM;snkE#BHLrB&X =h5zS8fSURWvgmo7=h)nA8X.&cMmjROfjG@s]hbj>l,E' );
define( 'SECURE_AUTH_KEY',   '+T[Cg?up5V*PE}q4y%6NUp ok$4mEX7+. QaRE#8q-lEE+=U4pf+/`zYi5pLDJ.[' );
define( 'LOGGED_IN_KEY',     '7++Zi#b9WIF]#H$x}lU8M&t-rGiOQ%`sEQp=.x`h_FzXQ[ebi^I5SAM^PgFSovx]' );
define( 'NONCE_KEY',         '!d222Wx9fUn1{X_?Cll&L$J%0*Yx%-f+ Fmrjn;IWT5IU3):>F7%3+i!dwI_r:T=' );
define( 'AUTH_SALT',         'i7bL/|maaxcJiQAjma^]$Fe ,h]_/3^z{$75`H11 >STUi;^6pou[t&B3AzCa<)N' );
define( 'SECURE_AUTH_SALT',  ';|!=-iQyFBS+7Wuy*)iQnCm.t6HOA0COx4tv{h_bd6ZF!fm|BELG&ziRj;YxY<^>' );
define( 'LOGGED_IN_SALT',    'GOsd?v>A3P?55C:dGGv`vnv<j1Z;vuiyG8N|RvJ7DK(v!#FuwB&*=Z4yM/j?K0h;' );
define( 'NONCE_SALT',        ') ,R[lDFV6Cm6X?%JF*k3~GYAlFZ@nR1#^U*BojYAG:i/<HIB|n9taASpbzt0::6' );
define( 'WP_CACHE_KEY_SALT', 'ls/Ppwwgls`ElA`!Iox>$ji|7#Voi}br^{rJ_ydm6A<0x1k(2w7/$k^w8`K{s.^}' );


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
