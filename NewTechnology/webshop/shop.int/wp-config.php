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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'webshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Enl?I+gVVI-iU9xCWX1iNvuvGLGZ.fcOAWZLF^>G#^hOvOsJu]E}PCo>y%/ng-Y&');
define('SECURE_AUTH_KEY',  '51kUe@&K/[h&}8jRr[4YF;cp4_nYh{lc(C1#G;={%:}jsn=6jI^zNS{,ujF3xvg=');
define('LOGGED_IN_KEY',    'GC3fv&b>5f{.w|Mm>j-X_:S_t-3CRMKcQ/E2Wesq9x-}>%}~DgZ{!BVCHg/B/.n2');
define('NONCE_KEY',        '5qr.LCj7*il#/lCYTZbJEOS* iB$C(dyj;o{D65UoSXU{+7RppFG2J5jq~Qu:t``');
define('AUTH_SALT',        'lL{x=<UX_hL7G<deXxn`f[^6=LZ3?H9hzo~_*+YiP2Df(qNZ<5O#qtJu8B1|%A%$');
define('SECURE_AUTH_SALT', 'E-3i0C1j62D(d-^To69=Hso<H|p0 )*}`^|D>e0_@W+DzS9(ZAqnQanrzaLYEacy');
define('LOGGED_IN_SALT',   '!ZPx&0VWj!0I/>7Thc!o8C!1Zd_NC+9W{q@p>J,7>{rZ%^&s|T^X,^1+^rv24Vj,');
define('NONCE_SALT',       'ev,%%!hJ6[~Y{2&B:~f-]t`2<OdF`?W{ ,jAfw#XpJ.TG#61U/_w{W+Yv~>%s7i+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
