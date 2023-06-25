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
define( 'DB_NAME', 'fandji' );

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
define( 'AUTH_KEY',         'Tk3bgCV(.N /V;-55vrT@LW>zh_BV0LE5>1y-Quz*b!<X.Bph)LxCA!l;D2-cF^$' );
define( 'SECURE_AUTH_KEY',  'y3!pBVWl|T/na~!UuGs4*%E .fQVpu.jFnZNAM1yQ=e_j$SNOB0,_0JIiCu}C:F`' );
define( 'LOGGED_IN_KEY',    '2`x#j,[Fl,Fd4Kc^M]-:myQW/=THT>#@-RCeL[V&I&=u9Oi7OLzuE|zr(-KkW`*}' );
define( 'NONCE_KEY',        'ck%8F)]OG!{&E)]i.z8GuQm@tUDA@))bftgsij,2hFO[Ax*SBz`d4H!z~tDuI*/h' );
define( 'AUTH_SALT',        'bP,>[E6$ Qg=EZ1OVz~svb8^KC^J$sAW{t*l #7f.eQY LbR4TGJD[i;hK2Xpz#l' );
define( 'SECURE_AUTH_SALT', ':6k7eX!dY2kgh:Z]^oe/?yZo1wu#t/jxbv+6[{z.rBnlo^Nc Z{+2fJOR1 ^mV{X' );
define( 'LOGGED_IN_SALT',   'pjdUy1H&x9<{5rc+`.WO.&L9X,;uG/CXSfWU~,FQhjM!^[?x]R755T4JFJZu?^3:' );
define( 'NONCE_SALT',       'J-,hmN>t{{YqEdwtvD(/biW@E`!6Zhpf1:%eTQiQg=.=!^YSst6Bz@#T/SR%ue4M' );

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
