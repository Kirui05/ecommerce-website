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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce-website' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '!ceCX<QohwX_K2dkU*_G$yOoitMcx!3MHN2f. 3rr3Oq>NyVjEPa{Bo_DVm0itYM' );
define( 'SECURE_AUTH_KEY',  'J7g3@3Z$U%nZeA(~yuG}w+ TKXZDXjD8|9_X0fD1?$hB$Rd#(KhDcw%dWzsw4L%k' );
define( 'LOGGED_IN_KEY',    'jBH(CZ!3S!>xzlVr&`4}j=;zz/|}@uSk?pjo7g*6R.?*0 y6,|W:-hlHyZ/T:B[,' );
define( 'NONCE_KEY',        'EqgEl@;M$o~m2blY7jb&sc:D@zR9fw`Znd},ij_i;?s9_QYxR5zW9DTGYT;Xd (g' );
define( 'AUTH_SALT',        'i$&]xF[>c5qlsp4F>|^6g}@-Yow>vB,n3AD+3G}~0Fy=LN<Oh/yw5#uZ5]5[.&$>' );
define( 'SECURE_AUTH_SALT', '95NiB 7J&sH>!VScR-=bUP>.rK:%c|zoJ&lRg[5l@gtz#-#2B^7S~8o^PU9<8s1{' );
define( 'LOGGED_IN_SALT',   'Bt)qh#NkPjI#mjVSvIDB`-?}QbZCd%F{SI 2B~LgFq)J522%fnhzb(iFgH9J-&}a' );
define( 'NONCE_SALT',       'A7}.c!dMeW#A#CGn{Lx:6tB]Am:ygHb><Q n[X<#`VCq|x,-~ j2GL2FNfpY/?,h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
