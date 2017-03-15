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
define('DB_NAME', 'goawayjo_sunnies');

/** MySQL database username */
define('DB_USER', 'goawayjo_jose');

/** MySQL database password */
define('DB_PASSWORD', 'haha626');

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
 define('AUTH_KEY',         '7?eU2rofe|h3s7p7~5/U$5CxMR,Rfm7y-QK+=)T$kzogW|+Q.8Hwb&HT??PRG0Yk');
 define('SECURE_AUTH_KEY',  'wlb]e^kFY|anf}W(32=F<(zPE>ur;SDxi5]k+c/s,y8d+ty#l+n_TB<!x=k-pR:|');
 define('LOGGED_IN_KEY',    '4P-ac$I_9I]!bRMeZ3oR@l|xx)7*g<.OM2|*FVj>ge%m3*,lOl[Ub|@pUGVb=ETf');
 define('NONCE_KEY',        '.EK`|g1VQPH/>@~s`jc9LV^Lik]6jKyF+t**opsj#85wK1M;rU|}6[_9^rp;]*dR');
 define('AUTH_SALT',        'VJ^08BKqlO(DC-!xTvP^v9!+n6|`&2(WD/s{g;)s]_0]p!|(KZr?b+Xf8-A,J0qI');
 define('SECURE_AUTH_SALT', ']rGmx^3g(_[t zl~y?%ZZ!u(lWDwRv{)q?]bcx*%E;rx1Z$/kRAcQI{*Q?Z,|b5N');
 define('LOGGED_IN_SALT',   '.AGmN]L)DpK~##29|G|)+fLX=(2=ov^6$-7U}-Ts~m[%.iX!+lvcY_U7WC@D@uDf');
 define('NONCE_SALT',       '|+.+5+ me03Jl(:r >wFt:C>CpxD|<3*`E)0S+X_>|;l]J]U;`+jF7-;|2UB2;9&');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
