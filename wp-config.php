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
define( 'DB_NAME', 'youtube' );

/** Database username */
define( 'DB_USER', 'foot' );

/** Database password */
define( 'DB_PASSWORD', 'foot' );

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
define( 'AUTH_KEY',         '%S[iN|m,GeToz^cy][-[%8,Q^3GSvxlyh>9SX3AE9Aza]n9@S*iQ2d>5bQa,;E{4' );
define( 'SECURE_AUTH_KEY',  ';W[BO4Bs9Ur[sC:r6/+qE+Sp5fS}4E@eICPz}UC2y,}*{um%O^{TwXgy44WQ%T+;' );
define( 'LOGGED_IN_KEY',    'BKAG>o J%xrf7cgFK}/tmA[>@0Q1D1[e;%+6~3&j<WnFXniGEo/X! itg3W$-DUS' );
define( 'NONCE_KEY',        'py;1610^@xrB.ykNg9mAE1H ,4-|Kpa}uZXc9~1;0GkdDDEoa=AVL$r*G2Wsly;D' );
define( 'AUTH_SALT',        'lR}3gMdaMScy2B0XTH>d8jZvJ_N`_<:c%KEYD#g8LT 2Wb{a&@Wvje%2z@WVjyj4' );
define( 'SECURE_AUTH_SALT', '}%V&Sf`x!Rp1==2Yrn;B&w!YxvMuO@6gtgW]w(0y!!CX`_dF=&F/>YUDv#L{the]' );
define( 'LOGGED_IN_SALT',   'S0Fnz8l?AXK: 2t`6uE@Hdb1s_mn10gSc6FEKAZB[zqbhG+e4yT*@3l]&Vufil,#' );
define( 'NONCE_SALT',       '&YcTKM]sqxnfHgx8%3?X2=:=H@}!-r5[)9M8#+.u#x}x)4v.0C$:-KY4zw3co$b@' );

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
