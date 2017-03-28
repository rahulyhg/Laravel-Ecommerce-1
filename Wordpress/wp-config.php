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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'database');

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
define('AUTH_KEY',         'ZMxdo-b:{hH eus^1SM8>Q+Z(l#X8?kmTp>oBl=V{F~{-$@sQpFkbsFmdWU@C[dO');
define('SECURE_AUTH_KEY',  'A|KR,I5MdkB2L.qnq(3iB`/#UtSAsyDwSZp7n]1SHvO_e=o.#~Biqe*>#xIF2XBb');
define('LOGGED_IN_KEY',    '<;hml.of]7S*_oR92~U.g{AQq3U,]u:v~xd:y|xSIo>iNfHJ?Cp9qs}dhL`iKm]p');
define('NONCE_KEY',        'e~PaSX$KU5JB)vzHtb[N;$8G14lmRHo}emvVFg[GZ=<jNpGB_#1}/WtB8fUfpSk(');
define('AUTH_SALT',        'v[WvU3_~4:oDVDJ2j;Gl8*HHk8a8WXX6+M655nJi]LFb-o7Qs2#vAyp03!jf<=pQ');
define('SECURE_AUTH_SALT', 'gdd8I&GQjE@~]EAl`db9UqxL=m&E,PExzF|*:tDgD|cM>}d(3bV<iSlzh?]=7vZu');
define('LOGGED_IN_SALT',   'C+JW_M/&[P6Z6]`8i/0N=[j~-,:s3fGA(@jzm,F%wnsEo5j9]5IOxgx>$)?u6E)8');
define('NONCE_SALT',       '12Ox1#f`dGK_km;qD g&NI3K[({MpaN<P46KuG>{kW*F{YTErN0]8a>QtY9.wX;|');

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
