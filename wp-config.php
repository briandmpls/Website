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
define('DB_NAME', 'testbuilDByr5au');

/** MySQL database username */
define('DB_USER', 'testbuilDByr5au');

/** MySQL database password */
define('DB_PASSWORD', '8p0VQhY50H');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'fB}^vjUIBvkYRJ80>!rgUN7}!zncQF3>{$qfTI6{*uibTHA2{.+qiaTHA,$rjbUM');
define('SECURE_AUTH_KEY',  'V4[rjcUIB3},$vnfYMF7>^yrjbUMB3{,ogYRJB4},@rkcUNF70>^zrgYQJB3},$.');
define('LOGGED_IN_KEY',    'J}^yrfYQ4}|zskcVNF80>!zogYRJB4},@vngUNFME6<*yqjbPIA2{.+umfXPE6;<');
define('NONCE_KEY',        'dC0[!wogVNF80|@vogG91[_wldVOG8:|~wldVOG8:|~skdVYQJB3}^zrjYQJB3}^y');
define('AUTH_SALT',        'kNC4[!zogZRJ80>!zoSKC5[_-ohZSK81[!-ohZRK81[!wohncUMF7>$vnfUMF7>');
define('SECURE_AUTH_SALT', 'dG4}|zskcV91#~wphZSKC5:_-sldVOG81[~wohZRKNF70>^zrjcUMB3},$rjcUMF7');
define('LOGGED_IN_SALT',   'N}|zskZRJ80><$unbUME7<$unbTME6<*umfXME>^vngYMF7>^ynfYQF7>^vn');
define('NONCE_SALT',       'J}!zskZRJC4}3{,yrjbUME7<^unfXQIA3{.$umfXM0>^zrjcUMF3},$vnfYQIB3{');

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
define('FS_METHOD', 'direct');
define('JETPACK_DEV_DEBUG',true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
