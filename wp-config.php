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
define( 'DB_NAME', 'wp__WordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

/** Limit Revision */
define( 'WP_POST_REVISIONS', 3 );

/** Memory Limit */
define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u1qFRweWT+Xu0~gI:tX##jOV+8Q!V9|!h9|aVys<_fL+0:YS2+(x0(D))lF`~lFl');
define('SECURE_AUTH_KEY',  'WdQxKafRI8pt|_@Ko7 %-@Q|ui O.aUnOa~Vu`.+O:KuM9xe(A5_@FXPtyuQKp:g');
define('LOGGED_IN_KEY',    '#^=%D5kjqH{4u[kn0iQRx-E(qha>M;?|0I$bL0wlR.NRXk]v8hJ?RYsj%yj(RdGB');
define('NONCE_KEY',        'c?8+^nk.M+#1?[*zPL]v[3P-8x(/q)4%0:?LhtmaTyih+?^n%ehB$INcxnr}})v[');
define('AUTH_SALT',        'Jx:(<mq7L|lAbv82D}|e-^_1~|/P$n=rH: %8Flr%pU9U0Uu+=*ko!qJ8P:DdL7/');
define('SECURE_AUTH_SALT', 'qBh[}GA]+X*Uf|-/&xl#(+JeAaan&yAYKOgdY2sWqU(-|+S8+mi1#?K%Iew!=w8]');
define('LOGGED_IN_SALT',   '`j>f/+Fe3ps(>c9P{L5Sx5Y|{)=747>^)h=&/&r)U~aR49-{h?E9ke$=)b|++7o{');
define('NONCE_SALT',       'aop=YN`Sod*I}FKdawSX8LRW-!XP&719L#}wiA6bLhw:0}k?-K idn%7cJ+cs:[N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp__';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
/**
 * This will log all errors notices and warnings to a file called debug.log in
 * wp-content only when WP_DEBUG is true. If Apache does not have write permission,
 * you may need to create the file first and set the appropriate permissions (i.e. use 660).
 */
@ini_set( 'log_errors', 'On' ); /* Ideally, this should be set in php.ini, if you have access */
/** Please test your theme with debug enabled before you upload! */
define( 'WP_DEBUG', false ); // Or false
if ( WP_DEBUG ) {
    define( 'WP_DEBUG_LOG', true );
    define( 'WP_DEBUG_DISPLAY', false );
    @ini_set( 'display_errors', '0' );
}
define( 'SAVEQUERIES', true );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
//define( 'WP_SITEURL', 'http://omegataris.thddns.net:9005/blog/wordpress' );
//define( 'WP_HOME', 'http://omegataris.thddns.net:9005/blog/wordpress' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/*
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);*/
/*
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
*/