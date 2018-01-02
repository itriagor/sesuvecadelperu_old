<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sesuveca_wp35');

/** MySQL database username */
define('DB_USER', 'sesuveca_wp35');

/** MySQL database password */
define('DB_PASSWORD', 'dS@36j0@QP');

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
define('AUTH_KEY',         '| yM-y#o0 <shX)o251N1y|(PFz`+%GDFML{xqPw4n*Q|Gp#g|SQxB&J(_])nl0T');
define('SECURE_AUTH_KEY',  'aO:Q8y[&.O{JY&-!6b};-$La-69VGw RD8}]k,%uGs^RS9?E]Kc:#6zFpTpc|Z0Z');
define('LOGGED_IN_KEY',    '!nKKn.-NmcOxFN (A|YqEJ.oiJQlHW9V=a:_H#[YDt[%lW6s}(tu@$h/#97}R,>{');
define('NONCE_KEY',        'JKc#=k4C)so[[+XJ}i)B{VqJYQrwxQiyvZ>/%Qs8+}qCiOA>|)P4.{=^-*oX:;G#');
define('AUTH_SALT',        'y AI;Owp6eYxaddInrD.*}zk=CNJNqxqDoE8ocD/4Wb>Szylcs?tq)Vx>v=Yt)c$');
define('SECURE_AUTH_SALT', '^6K.H)l3M@g<+[[&55h_`d;X!g}GfsarJ|!m+~>[g+L!Ds,)Ep<mx>-88!Z<):XN');
define('LOGGED_IN_SALT',   'Wrd-RECisCt9i7t8EH(u!L:m<l#%WlmbG[TYdSYv95088,@+wmNM9!^j6 |-1V2P');
define('NONCE_SALT',       '!Pu|Yq(8?Oo,<eNDFe4dIneY==s(>=O8ol050F9_N5XIv&)Z#*~at%-mt1L@a0x*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
