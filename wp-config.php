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
define('DB_NAME', 'wp_claire-blog-rev2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Z,HC~D5>605RqA_]oCaL/}Yj|5?B|!-~kY@GNDsQp;XJFa[LYV*|HU+},zWd<>On');
define('SECURE_AUTH_KEY',  '$1Jb=qzRK3*?4ue|}9yt<j4T*U#-Y~6:N9I.^ ;3Ogj$8tW-&kQ@?xlYS5plz2Ji');
define('LOGGED_IN_KEY',    '};5a-K|72|Ea%TC>#va(%^.-(@_ <-6%bcrGFf&PGa+yrZC^<(|X!s(I.; j.dc!');
define('NONCE_KEY',        'wboXt3c%rG*uZTXxoDJZ2|dM0$Nm;u7+vs|;LSYA[iP)dS9<$vptGfKTZR7D@bhg');
define('AUTH_SALT',        'k)l+B(pg;9,WaS-Es+[u}MMBwY(<ZyUh8t2/ZXZ=^K_n9EsBJ?:zIHc`8|GNY{[ ');
define('SECURE_AUTH_SALT', 'J>}hV_+lUrd05Ga5S-6uC+ldpb+|#co/5Y,U so=CLYu4!bPo^zkhFeU*wX|SU3x');
define('LOGGED_IN_SALT',   '%rg-]Y1oUJB7 )$[5-CSG$.4Xi.2-KI8FLi7-5oHZUg{wi(<_X0X?d |rvYl<>yf');
define('NONCE_SALT',       'q,Fn_n4WUc[w%Nv0-H]|qK.Ny5JGCkg29kie20@*#aq}_`PuV>HS_{Zn)h>-wLDh');

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
