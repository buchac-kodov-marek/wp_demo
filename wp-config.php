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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1111' );

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
define( 'AUTH_KEY',         'Tw,Z(vIIK-2A#$^Mt1]U VM7FpLeP=Ou6]sJb-#-[?L8!.MU0sB]8X6D0- jy:H?' );
define( 'SECURE_AUTH_KEY',  '-6Clm_/#>PTK/[F_`Q^*=3U3{3 #0l2@9WXz)7vQUIrfGA-q*q:QOeItS#T8`%q-' );
define( 'LOGGED_IN_KEY',    'YdyqxJFDJcje+e$DvmFtLw]cCMWfQ{*:6|[{)D)?&PgjAwI2?IHJeU;),&OKR$QT' );
define( 'NONCE_KEY',        'fKyZCSK678k]3~p,}tR:,M437DY^N>^IDo=SL?<x6dm_<zr21~?BUQS>pV@?J}_B' );
define( 'AUTH_SALT',        'Vc;=&i8;#Gsj{U =,si#:L8jS6HLr8m[:rG;USJn-ZqY7DiMp?e>lF2.[%K[*^&&' );
define( 'SECURE_AUTH_SALT', ';8mdUjRK$y3h4 H>1AH>/t0i<v}]jx[?xr<v$Y|%sYi6&]qdA9[s5S(OpXAS6y:;' );
define( 'LOGGED_IN_SALT',   '(A]5;Bra^g1D|7Nk=z&vz5s1t9B>1Dn0Jz#0{D@1MN>xO,:e_34j.:~I]>mr$j_.' );
define( 'NONCE_SALT',       'hk0 z`ep`.9f4vq!i7{ ,8$jWQ]vjN=SW(?W2-dj@._6%geW_pR@e+ }n&/)UX9+' );

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
