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
define('DB_NAME', 'wheretospendcryptos');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Ao86G!Z@@E,sw~|]3IuHbF}_CaN0jm9O^ wDc<7RU)|)4Yn<h52@*+t4q$k1[&_3');
define('SECURE_AUTH_KEY',  'fSf&>)I)V/G,V6Yb,NR_g>EvJLL*Ly_fp)%!pQqSwI8@08W3!KmP9VOvWrRy1 Q]');
define('LOGGED_IN_KEY',    'Rq`iQLGDh85`vPmz`XtZ}|Kc^VsPE0r%G:OYg5#cM[?]Wu)WIU(nJqhsnR~UThMs');
define('NONCE_KEY',        '(L0YuG-BG))C(-_RsAdp,2<{YjusZM,n~5UQWX:GK V&1<R%Ml@,6W|;0$U[W}U7');
define('AUTH_SALT',        'bioJ)-muOy)V~gvC}sdc}QI2sq&5Eq9{-AlZy[9AT!HC/=k7 I;lU`%Ydfy~NnTA');
define('SECURE_AUTH_SALT', 'Qxe#~-:Z@+S{HUh-~f<2G8?}7c>x%<=f>I1HYrG|2ZFYu,*kmG^c!6iz!RZt jiA');
define('LOGGED_IN_SALT',   '_cO%^=7aqN(%Y?{S!FQ?S.]@P?4?yy<}!ci,j=[9C<?_j@LUbCWjD4}M0Ki0h6t(');
define('NONCE_SALT',       '9h*ao56hCh~a4hmVzl)N4Z$$d,:yht1hF8]lPa66)KSHJ$*;z -C?$O!7vc6ZjQ1');

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
