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
define( 'DB_NAME', 'tinhay' );

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
define( 'AUTH_KEY',         '.x5!r$O(V9YmR6vcu9}INL7x%%(2Rv]M,Uk(rxc7q j a`0EFaPWeLLP@uO_<$dV' );
define( 'SECURE_AUTH_KEY',  ',T>@(?W,}/*$!d3vIughgG;?h%c#K8LILpYo?~lEc n;HWT+k?QA,*+XpE)XjbH-' );
define( 'LOGGED_IN_KEY',    '}$[~S-3@03HC+=DAdD]Se&OC|,n(e9sl@wJ^^/* dfQ9_g<V$Tr%>%IDuZxB{u5|' );
define( 'NONCE_KEY',        'LAulbC;Zo,A!vP`TFnJpsd1&irl]qX-ZNAdK}0uSy`@ns_*RzlRpC-+8<)cTJv=4' );
define( 'AUTH_SALT',        'i*Dd}bo*#]Y*9==/b?#5C3ZEdU(peGy?n{+7]lF#Yka?Z2QdULGP``K2=AeXv6~+' );
define( 'SECURE_AUTH_SALT', '69~9o2Y]r s$&w:YI$?^Bc02Z-s2Wm`&trnPssdynb:Kse5=1Wq+Tb%AgRW=U-(Y' );
define( 'LOGGED_IN_SALT',   ';JMwmu3&;t1qeoNQnsT4WSrKp|eceL-:|%LmMbz9;n:sA;HzT>/ynLW5]?%U%8V_' );
define( 'NONCE_SALT',       'VRxti(a?]Xea6jM7<$l$8Dnt>*%9eH|(aLJWt<N, }Cza=;b!mi{d7$eD+DOD]>#' );

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
