<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devfit_db');

/** MySQL database username */
define('DB_USER', 'devfit_superuser');

/** MySQL database password */
define('DB_PASSWORD', 'vatanggoma');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9v}x[wP#8Bm{b5:D 01LupUX{}K{pbuORf{||fXU!B;%@3w0J,u@f`,DJc{3D5mV');
define('SECURE_AUTH_KEY',  ',)_W3;||0ee/$ZDfn1Mqg+q=cTbf&Zs8rM)B^y&oA!6VG]/x5Gey<X$7;r{giY0R');
define('LOGGED_IN_KEY',    'xbF9M0k,R`_p=vM{MXbmaNVWe#?ZFiYHfvKPISV;;Ax^vl[l![;?oWC+2,tC|(w1');
define('NONCE_KEY',        '|J:8#8^+]r=h19Tt<QPk?yBaa9h?>qLJDQ<6%d;/n!phGU.r`CxSr^l:nUs1IIk&');
define('AUTH_SALT',        ']Y!]X%/Y{UeNt+[*X}__!N2%_}=gZkpD%BhMUfB8]eS b009[NstB>]F>`Qrl#8N');
define('SECURE_AUTH_SALT', '<)vviRTz]]SSU1F5$|eP;xG?ig%@sloQV%QK)RoOtH%5QWUn/#BGV%@ypl6[|`S`');
define('LOGGED_IN_SALT',   '!vZ|9fm(DS],y8B.xO7U@&y@zT&LbqST/)Ll/m~-RD-g$O3XUVFCpgjRUtG9ZYa0');
define('NONCE_SALT',       'o=mQkW`rcTou<7<t|y9%!NjfH[UL+dX[?*IO*X2kX?mga<[{C=^xcu1Y(6-N/|S/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
