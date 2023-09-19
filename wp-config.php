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
define( 'DB_NAME', 'volaret_travel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VC-8&fQG$GXvn@{q36[iEGhcCH];n=o. `:v/J{1HG~C(@h7!VHK9L!GMU*dwD@*' );
define( 'SECURE_AUTH_KEY',  'l{6[>/Y#Wr kwoD}!Nw:s-r.:Y19T_L@L?<B6|AIFMn{U:0cI|DY$2F!;}K.o9,f' );
define( 'LOGGED_IN_KEY',    'ToFW*^&NQ00v/(#^3:o5M=RF|W/Ze&a?lG<e.3{gK|#O5R+Z;M7L,gLy[NY8G$y%' );
define( 'NONCE_KEY',        '9YY^~[[&qGyX9yLZ=xd.qRJ>K_j#Yyy{8!SZ2gMi=1!jpE4N+JRs&hW*UUTYZ?pW' );
define( 'AUTH_SALT',        'f2-PU)a~D=%(@mDuF1^7hLtd9%nt{ZD-y5JP+SCJQ_9@/S}*7j,qgFh.V<zTfI7h' );
define( 'SECURE_AUTH_SALT', '; S7yPQ7T9?H!C?c6$j7cC2O!/=)J]@e!>ZgvbG.EO-/R5}*Og;ur{+<Rf1~Jxa>' );
define( 'LOGGED_IN_SALT',   'IJ-]4YnUi]w^.El3t``RKudb+`.DQs0mE&dGqb%Qg:4.i2g:nawtLy+{x<WF*@!M' );
define( 'NONCE_SALT',       '8_kPX<Ce Q@}u/*eWJ]3z6D^2aU]wiKL?Ai7bHXWa WL-Ush2 =Va2P.F[RKNbUj' );

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
