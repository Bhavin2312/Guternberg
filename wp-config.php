<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'guternberg');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'admin');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', '`08VuC,wQx>i`&{i@-u|w7bwiFy|%7RPvgO0!|`l#FkcBT(o+{gl|+(V$>l2@W*P');
define('SECURE_AUTH_KEY', '-AX?g/A1S>BX1K(nP+)J#&#}J,;oj|ef$W`tu:<~wd3Y#0(y]UhW]NDEy;Z6f[q[');
define('LOGGED_IN_KEY', '<T-/;55[3mJhUe(YVNc)X&/Vz(m_9~OZ@M2afpuUO!|5oPEI5UzW` W|N5{,p!~r');
define('NONCE_KEY', 'x>j$@~p,=VJy-?_BspBfju=Y4H]1LV,)3sr]NLyoG[-xqmoZ*3_,H.(-8F7_F&t#');
define('AUTH_SALT', 'O}1woQ+y %34h@0a 5I^oYvMFpmS2}e412PG23;}XD6YR3V%t19BQkJ3!e8?(Yz6');
define('SECURE_AUTH_SALT', '44oZL|Kp,R~N5IJ;dkVq4`YB|OR)}OrFPS`mNoK6nPY|~voArxr#,fnE,{uA_XrO');
define('LOGGED_IN_SALT', 'DbL/%ylK00?ph.1SAhRmVq#d+ZP>%-;a[ihL1hN} 49#Lb),*GGTZr |p%V8Ey3.');
define('NONCE_SALT', '2|3g<E$6!-d9o2GNykZ%pa&2Ga{s?6Zbaz(kVZD9cyQ+Yo?by?e|B]Tcry&^Qau~');
define('WP_CACHE_KEY_SALT', '0=jlWB<{r&BVg,g}>8a(A1ky75U%([NlCrXqM*iiiOTB^nC,ySDW{[/_k[^;YoX{');

define('FS_METHOD', 'direct');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
