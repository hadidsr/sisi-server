<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         'e8Ss,X-GDK*:7JSo f f52/VB$|t#T-sUV+_i29w!-)?f7^44WQyj~(#4orbEzG)' );
define( 'SECURE_AUTH_KEY',  '_:NEZ]gBVnaH}DPP[l*c0~+]z@uVDp#aE_imzdRJyn+!:x%#1<rTx!UEnqXgd~Qh' );
define( 'LOGGED_IN_KEY',    '!IWZO;})=e (D5fJ6hs#0R<|(c}rX+}b%/[[P=FD)_%on<^!sc2$x%s73vJq4Cw7' );
define( 'NONCE_KEY',        '18LJjfZWM#,[I<99Gsxq<nS-$JF6ijZhs;AdSYkDJ|Ez5E_R5Cjl}qodP%e)|?G ' );
define( 'AUTH_SALT',        '~2|A&3UuF?Y!S^4kn&4ucE8DG0ib@o7p6zpV>Ib:P):z+ltkBtUv=As3$!ClYmB:' );
define( 'SECURE_AUTH_SALT', 'rhz<mrNx2/t4Dy8E4n2:Q1|.a(5[ H,ph/1l(BVRA!(Zl<4?39FdG=_DhoVNVI~L' );
define( 'LOGGED_IN_SALT',   'Rw_)##k[n^.e1/:P[X.4)vF.m$BV=Z`|{uks{2fL6`@{*YWSB(|IK4lEA _* dS2' );
define( 'NONCE_SALT',       '4TJ(5=gJ`)f:c6V00-No,b-srcsy[Rz|%$*dRx5l?,5 wZ0RIH$4zCQ3l|t{$zy{' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_REDIS_HOST', 'redis-server' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');
