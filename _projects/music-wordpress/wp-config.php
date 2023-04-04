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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'music_data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'vh?#3QDoLh /%Gp!{T<A!?B3ML@(9{i+Ar5qY6.PL8`g~YZv+r{IqhWgMb`cbMc)' );
define( 'SECURE_AUTH_KEY',  '&?!cn|+N[ &Cw:jWMNhwwg<>]c<lx?H^Ooc0m0I0Q%R76sNxcX^ifq_bJO)mhB|h' );
define( 'LOGGED_IN_KEY',    '|(Ua`~_{k0!DbO9D4y*lh$q%A]w&DJWxI>Ma)hRWoj#tL>:|M=~*<6xbS mRpu8U' );
define( 'NONCE_KEY',        'iNFebPR@#/B}ho5{0:1OJ/{StFx~bag{.H|/63UL&o0$_Ar~i: `%{/+&~8xMXEn' );
define( 'AUTH_SALT',        ',u;S_Q+!^J1uH! vQ^ajnmjKku+RGoX4 1IwCXQ@?x7-U^Jlhp>g?[n`1v5)ULEp' );
define( 'SECURE_AUTH_SALT', ':tKK6R6(3NK|%$3OwfMtX/8a~_^bdm?,%Vw.S:{TfkNzcJ`I4K_aNVRe<@ugb(UA' );
define( 'LOGGED_IN_SALT',   'Aj^$Unr6cN}&2l~vhr*~.g5.yC-i-(O@Q[AhAg C;+3?+6LAlC.7j7B[^f)9[uBf' );
define( 'NONCE_SALT',       '9!xjht?:{jTA}pR4qVsefR?~I6>*r {R`Se1U4^:&dD%~#cQ@+ZYMeFv.=JmauRP' );

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
