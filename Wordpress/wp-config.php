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
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':$Qs])=Xa^chUlqa>m9%yt ^,BG-jVv3`>[EP})sYmcjACOv9i(rQo4XzyoQ:0{r');
define('SECURE_AUTH_KEY',  '+09yhZuVMhJrB5B0sE74s2b^ax/}%ON5A%gkZP<YqtVHWOw4[xH[.:ZW2iR{APz)');
define('LOGGED_IN_KEY',    '.*pbF{Cf^u;bgPr?4fsSU8 !O{./eM` E!g#dk6LY`ye>d8]64_!bdz/RG5G?od(');
define('NONCE_KEY',        'sXY@,}1)%HjO7A=>4HNQH;~:ygvZlqHX)#JwNZ{8gg6j#qsu}( 9JGi#/@wKmDd0');
define('AUTH_SALT',        'fi%Z@wf6U@{J2B=5%r,2pnQV-ioh ,2ec8OOJtZL8my{(^~=I2AhzqQasS79^+{?');
define('SECURE_AUTH_SALT', '! >?WOd9>jVFW*Q kWL2blqA;rUO^Q1lYvy0!)ga0i#^YW?C91.lr]4]?z3cHwa@');
define('LOGGED_IN_SALT',   '9Ry`m*b`ytGc{dN1X87p-c!4`;c{jd`4-*G9BH]u,~&8YTz&_Dr@02=}f%@sMV^#');
define('NONCE_SALT',       'g:h*p%#]m{ND*C)u;X$R@sJJW;/@Q<&NMNrc@Sc>+D8oN-Ad%gI!/NHXU2Jtus00');

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
