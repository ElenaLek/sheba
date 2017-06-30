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
define('DB_NAME', 'sheba');

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
define('AUTH_KEY',         'Fbz%.eHvUkB0g-lmG 8tu0MiX<rC@C(c{w&7h&lx]{0D[.< $x.p2?2yD]?BR_}X');
define('SECURE_AUTH_KEY',  'eB^=DGTvOTxY^!4#-Dc.u0_I/MP5RxvB2, BJ[8,Ry.0U_m%h|b8z$NbLlq-4k.o');
define('LOGGED_IN_KEY',    'e[`&uQVU{i%RFZ3L2J_L^?^IS&p.0S%+<.tX$HTGnZhOxVhf+@KgFb.m;QYJ?q#v');
define('NONCE_KEY',        'C}0$=/KKtBgK8?YGctX&LTL&7mmi]gG/PnKAF&fB4[iZ@g ;b)<*# MGk*pwvE>X');
define('AUTH_SALT',        ':)s7}Te)P?2IY!i:u)w1v4w=Iw<xSJ:o5^sq}/5RV|%7q`y_-J6vpG&a.A(TJr}v');
define('SECURE_AUTH_SALT', 'XY_Fz}a*APdF>k?)pD^K6(BE64JNGHm.&A1eU3EondDd|Uc3_[%bKppYcaR!):hk');
define('LOGGED_IN_SALT',   'aAD7{%wm6?#Cr&*cg.h:zNo_~=H*%|{?++0huj^BXb!6/~X9ekOub5<onO6|H5;,');
define('NONCE_SALT',       '8S&I?j,yFy*dh%u`A/A3>f{{{+IG-P45hq|#n`iVo@}BrI13Xzn7`1P0*sz6XpQ;');

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
