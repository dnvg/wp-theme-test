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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'qxwv35azsc');

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
define('AUTH_KEY',         'J|VjJ#z$y=X&q>qcCfaYns9c2x%o8Xu*wONzX}<7>hd_fnuh=V@u;VGN7xOUq&rN');
define('SECURE_AUTH_KEY',  'gELf&l,w5<j*eazIyW/9A+X=zM(Rj$Do]H6P%nW=FV.u1r*B~|^%S6I/wc,g|23a');
define('LOGGED_IN_KEY',    'AQ|*o,T=@;m<DP2(P1;Mp/Dr5EF!55~ml]=mySmMBum959hN&)v&z$ECn[Z+  G*');
define('NONCE_KEY',        '#XQ/pqg]Z3m)>rq:d.sKI#8Y#l6tFuh{L*+GD&kd%#jVD39N`T5u]%avQnA(fQ}t');
define('AUTH_SALT',        ' gRz`4qbaCHa|8J<oSA]UNy^#~9e-&q 0a(`Q9V]]uf={^bgKtHqGM#&58<qhbA#');
define('SECURE_AUTH_SALT', '[Z+X3n[ke7h/{@Ht~o5H~e0qa?3.uo^|&F]pc?*-uM%`s%E&$inq0/X6,Ec5hm&N');
define('LOGGED_IN_SALT',   '(Pdx_q,swp._!DM8wz-3:ZG$6_{.|Z]>:pE5IzYbI4R`+;KhYwk!c*_>Fg)w -*h');
define('NONCE_SALT',       'iUeji?4hVQOR&6q~u~ZXQC,=9>A_/hb=n zwD!~H4vG_B8|3oRp2Q)NZGy3?aD@J');

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
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
