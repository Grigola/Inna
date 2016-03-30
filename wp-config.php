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
define('DB_NAME', 'lntustud_grigol');

/** MySQL database username */
define('DB_USER', 'lntustud_grigol');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         'B6WCRo9ST4)0U t{N C;_H@[w]B.TE#aoCXT5bXGpC+|][3u>-ut}Tzt!lckZ(X;');
define('SECURE_AUTH_KEY',  'iMOQd-ib8$-_(ijCP@v-ilf8gzBx4z0R%+]1Za/Vz3BA*rB2Y:FytCu(x5_2|{Gu');
define('LOGGED_IN_KEY',    ',6*7x0R^$f1 l-!IK2 n/~D7B0m:N1WwBS%CXk,3JyTB8p//N-i__q.ZAAEhQ[aD');
define('NONCE_KEY',        'xF@ix*9U=Y9|]UEkcbM9dz#>Cs`X_r=.ge|NfjW|CgbFkd@o6{Nf_H@Mdyo_}E{F');
define('AUTH_SALT',        'EvmD1fhY^/(o.&ac=z(-+w3LE}vi?Z=(jvIb]O)qr(6>-]%?|4LE|*F-;4-JW<y&');
define('SECURE_AUTH_SALT', '/E|CM`V;[>m./ZQ`x{m6--OkUFBGT#rBBEui2+oR2qpmc%cw3tW=:T* kw!!+O<7');
define('LOGGED_IN_SALT',   '7w/W*=$E<fOMcJ:~RbhK;PDUU#?2vI}[N+YpZja*(v-,@@R.OJ0!ac4?:kK,mr`c');
define('NONCE_SALT',       'jXChb|FD~-|V[BAb.Y>=L>ti?w9oia#I|I{-kr|<%Xk_t6x%{a]&)%Z8/rTi_.k~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mysql';

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
