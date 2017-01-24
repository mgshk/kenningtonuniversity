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
define('DB_NAME', 'shunil_kenning');

/** MySQL database username */
define('DB_USER', 'shunil_kenning');

/** MySQL database password */
define('DB_PASSWORD', 'shunil_kenning');

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
define('AUTH_KEY',         '}&!/uSVzhEx8Q>PAW7e9sW*L]ke=c-j)cW^:J5ZF}ym8oU>`cfv;PlH<qgsXG2GY');
define('SECURE_AUTH_KEY',  '> >yL; *?B@CXk/ahNW?unSrRddaio2d5o{(vJ GXe9fE3{67u:~!M%#M 8(WhR:');
define('LOGGED_IN_KEY',    '*T.xd4 X#=2>I O)#`Z>V[dqq8pS:%SVS!iLoY3tchFv1m(xSQ I|DA_ FXwF(5o');
define('NONCE_KEY',        'U*?D,xQQ/bj:Ze}I]fg4lDePIf``V;`6/,{dm*y%b$a?f*m>U%O%q-LSJj{C }FM');
define('AUTH_SALT',        '`&IM&af#wYc::zP9s Mw6?s;DmRf5[[g+[/1[&yjnq-u?uK KJ?l^mR~G2N-w5N?');
define('SECURE_AUTH_SALT', 'VkPJ?_xZ@BL^)5j<8r.XR93VdGqZS8&sJ$^Yhf@.#CJMhj5%[cpW<cpwutg/1LJc');
define('LOGGED_IN_SALT',   '@P4A&c82u8hMH;Z3Bgb;/]2)We,4sJQH1hK2m?FpdDnLdjV_/.03(E9LAL.zZj~k');
define('NONCE_SALT',       '8d!^Fe7ezE[Raw+gzraA6Vpt,MP4lwY.^_(?cXU9^cx:^*M y|>;<R1nb8av1.=O');

define('WP_HOME','http://localhost/kenningtonuniversity');
define('WP_SITEURL','http://localhost/kenningtonuniversity');

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
