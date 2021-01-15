<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
//if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';
//require_once(ABSPATH . 'wp-settings.php');



define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_MEMORY_LIMIT', '64M');
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
/*#define('WP_HOME','https://shaheergadit.fun');
#define('WP_SITEURL','https://shaheergadit.fun');
#define('WP_MEMORY_LIMIT', '256M');
#$protocol = "http://";
#$domain = $_SERVER['HTTP_HOST'];
#if ( $_SERVER['HTTPS'] == 'on' ) {
#$protocol = "https://";
#}
##$url = $protocol . $domain;
#define('WP_DOMAIN', $domain);
#define('WP_HOME', $url);
define('WP_SITEURL', $url);
*/

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/*define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
*/
define('AUTH_KEY',         ',>^S;XzvPg_}kcQBMIv~Km}I#g-fn8GbLxC$JyiOFv$|V?6|3Y.H1Q~w%rSr4>6M');
define('SECURE_AUTH_KEY',  '1xrS6_Rf0n<mB35JLe:jZt>(~ZTm6^o1$Kr.{;*oE<Y=|]c#)1937-}~~W=(3|Vr');
define('LOGGED_IN_KEY',    'w1th5/~+#ytebB;,6UNGeAC];@}sEa-le_FS0BvxjY+?1~<TK(;bACFtIL{?n0eV');
define('NONCE_KEY',        '_(hGD)wz?E|!]DI&%0ynFda%{.j2!(76}JF*PB=^=`n]UnD/EUx?*Z1H$OHO.]=B');
define('AUTH_SALT',        '9s?sJ=;uhqkc-Rc!;@^+6=4F`VX?^$KOKu;NTrH~0Uob{tC`LaR&$1&F|4[8fo5]');
define('SECURE_AUTH_SALT', 'xlA:JBr.@I<x/]lH/_z~{>=-h?]]phvYH%9p`&r-2Pg=p%lkQ8}j#eDwEQI+pP,S');
define('LOGGED_IN_SALT',   'Vu^-=VBFC95LM<(d]H@Js6OkF)p.klHze<8%|-NXrYrFPKu-+gMBo7<C3fo1Zp|B');
define('NONCE_SALT',       '/t2B7pyv7Oo)@i`:S?Dt]R^t)5^U~m5yGe_b}MzI=gN=z!NQgF6xIFM7AVh|8-%@');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', false);
define('DISALLOW_FILE_MODS', false);
