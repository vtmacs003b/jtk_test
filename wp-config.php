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
define( 'AUTH_KEY',          '[9gTEq$D!Ozt+XZ={_xkDPeJGdjYDXDuff|Os}2]T}I!fGY{Vy `*7_x::3&.(Kp' );
define( 'SECURE_AUTH_KEY',   'l6/jL.SoC}8ve#caIH!8-{0Ia2w<0gj>>lA4;4]p9!*FwAO#0*SLY|h}{;iRi<UZ' );
define( 'LOGGED_IN_KEY',     'd{q&l43Pcd6NY:5L<ZN+|}sw`!nu|~P~5?LF2tNZJaHIbDGTG*[8&9?bWUb7b6H7' );
define( 'NONCE_KEY',         'M6Vc8bgXN?fHgDWZ!_$Q!*+x^n+/2_=h@FJ}7B3RsCc+<66~ss??=2Vs[rO3fiYG' );
define( 'AUTH_SALT',         '#1%1R{{ `kM0><U~L$VB#sPgbq+s@BK,pt7,K#btUKhjlP*?TXmezY/FWjPSOi+{' );
define( 'SECURE_AUTH_SALT',  '~{YVZs8AAV,836^+$@0Jj8a-!3.&elBO8+omc)8]Q^#4u{nwjV2<yP9zO%HQliHQ' );
define( 'LOGGED_IN_SALT',    '=_PjYb+O> f@a:X*h[`Co=|JVKcn<Cv!_P3$KpB9Un4zaZzLB3_]0RjkA,ON 8OC' );
define( 'NONCE_SALT',        'n])bxh6VV:ec #Q@gDsZA=r^`20G$ZhKzPlU[<$.P Y_3V/*15Fb<`f,o,2GA6gz' );
define( 'WP_CACHE_KEY_SALT', ':]7+U?~xJU!ee,*I?Gg Y!T6B.C{H&q/2Co@tlYUPgv.VfjE19DZXtrA:17So%H@' );


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



define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'jtk.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
