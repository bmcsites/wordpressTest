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
define('DB_NAME', 'cfirpress');

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
define('AUTH_KEY',         'xWAuqnEl.6XZ~8)eQp KBJu/BllMXdq_`Y}FQJIbo=![Wpv#@,y&*E1_mW;o%E>j');
define('SECURE_AUTH_KEY',  ')su~A9Zha3eNY!#aaz$%u0[X9@#nJJ)9&L``q%e]xHNy4.^H l`VI *Ml*]ww$+=');
define('LOGGED_IN_KEY',    'Y%C[P-qyHD.VG,w@F{V>$^>YnW+s%@J hlUM1&DwQ ak9d@Z&OuaEBOC!W]XTMde');
define('NONCE_KEY',        '569CG|(lG6eHk _9G,gFxQHSJNJu6~Fx_tz%E_X4&GjJ.Ib@*qLw1[Llc@yz qZQ');
define('AUTH_SALT',        '>hdg^;!f+J,;B4,OJ?i*k P~|C*22lHLwpcB=V7KC(4&K?c19+jY%OP+Db<Bp}k=');
define('SECURE_AUTH_SALT', '81WlPr:&9HR@*^yqkf-rQ+lrW38zsDB/w-$v>WRMm SWp8V2 W/(1_|#{/dy?a%e');
define('LOGGED_IN_SALT',   '&x?n3EWnP&qv +HF!F?${0!Yn2(95PGLxPw~/H%41]4j#4n3c]qG*wfULDKN($ct');
define('NONCE_SALT',       'nb%!t|Ue)aTIZ8]CV[=Afj|jMr?2T7U*MyC:z`>|=w8qe7^).?B)3PT1$n`WV$a8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cfwp_';

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
