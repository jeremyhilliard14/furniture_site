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
define('DB_NAME', 'furniture');

/** MySQL database username */
define('DB_USER', 'x');

/** MySQL database password */
define('DB_PASSWORD', 'x');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'gOogR* |HWNW9; %|VlV=JQt!-2:.]q;y>v=o=Oz&tu~ezUbq<7%WR r73KX*ByQ');
define('SECURE_AUTH_KEY',  'TvdQ{(-owexMb*|&Z?-K<Av@m Ac.tHbs;**OM#>T}<#.~)W:ac&/1m]KcBQ9!`&');
define('LOGGED_IN_KEY',    '=%{@m>{^c7<frfFo/KIkx9[}ElyUNYaCjQcI|_b!z_8| fq/_eg?WPKhQ`jMxqyS');
define('NONCE_KEY',        'M=0=#cK nZ46pmxfXS9c6hAkUA|(B3=4O|#VqtZ[{5{DH]jmRL<Yc,sj*xe_)0lV');
define('AUTH_SALT',        '%9Kx/Q%v0MRVJ+=vbaU(r|<-}HeI;X7OfZS7YUt&`Lq*n_^mpT+%J-Q+XaBMCat7');
define('SECURE_AUTH_SALT', '-}8KPhS^k8ll/rI4r)$*q$}(ID^`b};L59M_)-keF6<- f0(E`t _hp:Dg%sK^]r');
define('LOGGED_IN_SALT',   '<2^3i~WnVPThXBnm{et$Y5RMJ_#$2}<QS<P3p|x`4BNY~aXfShW|)9b[mdk$#^Au');
define('NONCE_SALT',       ')$9j( GU$ou6*&yrH2&qC3>gdvdBxkm#!F>xfm8BEi5+ja1Z*wX3xASo}>}-n!~5');

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
