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
define( 'DB_NAME', 'thienbansach' );

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
define( 'AUTH_KEY',         '[+0j!VI~NAz.#V( oIoBF[jYu4@2=7]C.NkSk5.5OOjp^Dw$*y|HoT$UF$LoX5g<' );
define( 'SECURE_AUTH_KEY',  '3klgIq%&M/p3WBV:#Mg1xeoPk/Q:}0V-imDygeczLWE9$;*+!t&.>v=L+h7JcS}^' );
define( 'LOGGED_IN_KEY',    '?k`zC-0Fygy9@|>ESA|wmjotJ_df 8uGz34`./U*7V[n#L*n&z?K*e74urYYqjyS' );
define( 'NONCE_KEY',        'F]mAX8CN_[yD-f(TpS}goO>ujD[yEBS&4!a RdoSD0!a~)-cNF-L0 XH;Eio0v-`' );
define( 'AUTH_SALT',        ',wS%q?+=xy~s8Z:X^IP.6L4KiS1=oqI1</V)#f6SH&Ka8X Fhb$NC7=bUzcUqxbj' );
define( 'SECURE_AUTH_SALT', 'eVsiX*Fl]LR5KyZ|ECE_b9Rf))73vbOzwE0ye&>`2I1^gWp,i3ChtAVVdJeT}z,M' );
define( 'LOGGED_IN_SALT',   'e4s)xQ9g`=Yc(QE4MJR;>5!8`]pUmH>~_eAr%dq@Q1T,cFFDhb:z^ac!j=,|8rz=' );
define( 'NONCE_SALT',       'vT;#U-p*s}HjB66Yt[@kHEhxY,k-BopM9ZV:2e<}74.c)DUBsc,#OsgOoUCnYk{x' );

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
