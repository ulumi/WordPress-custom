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
define('DB_NAME', 'wordpress-custom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'loof2012');

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
define('AUTH_KEY',         ' E`@YeF98ojHkL.}^^;X/(N@,a-Kc;j2pPCF-*.9S+[|*2C,j-])he[98-l$991D');
define('SECURE_AUTH_KEY',  'o tVU(CMVn6a{wzf0lCE6rA3:H%m8{GLca?]YW=i!e}Mo.*Bc6Q>1vY(44`cCf@x');
define('LOGGED_IN_KEY',    'V*-HV<A2(XcS3dAHbM+sdp{;ns__dk2F>Qu@Yt6] /q:F:C++ $8}+V-8`-BXa~6');
define('NONCE_KEY',        '}g9.b#X-aKi<il/ =Ac4?+O!Ib:DMc*JK:f,uCS%OQf1`RKa|+uAt/rDekDh+jx}');
define('AUTH_SALT',        '.v }jLJV^Y3Q0%i|.p1[)F%$?Q|Ci+nqrg!^vQi;F$VO31,{WMw=+B9&^[Wa`RV$');
define('SECURE_AUTH_SALT', 'aK{;4y1SiNLO*s/:*r]?uFkOo;l7)<#N&c[3r|naJwIL`Wh9v&OlArxc73IJz>qI');
define('LOGGED_IN_SALT',   'm*-3 i=(q{:?e^WbS W8Jd5-~GE4|h?NVJN-(&QtCs/l poI23f(ncoW+$0Qvnc6');
define('NONCE_SALT',       '5D9 XJj$V7V3|nd%J<89yYnVOum!pjT4?WAP})4H$@K<ed{|)7JT#I*GaaJJe#[_');

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

/* Multisite */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'wp-custom.local');
define('PATH_CURRENT_SITE', '/wp-custom_u/');
define('SITE_ID_CURRENT_SITE', 2);
define('BLOG_ID_CURRENT_SITE', 2);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

