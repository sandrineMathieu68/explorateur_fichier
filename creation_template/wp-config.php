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
define('DB_NAME', 'creation_template');

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
define('AUTH_KEY',         'O/=(44{^&VQw2g?897snku1{~)S Jg,$*2,ZW`kn@ VVZ5yn$Mo8:qY}WkNE9aSW');
define('SECURE_AUTH_KEY',  '`$*_iDS@R+YJiY^(0!%B@}LaX;].ATsmNT1.zDy>WE]1Mbu3wz-sw;eAyXyEA,9U');
define('LOGGED_IN_KEY',    '3s7AqJw%=^HfUJvIu~zF`1^9{3wg-+lsEMXS4{mV% -W$i|HfnXYL]][FLY84c%T');
define('NONCE_KEY',        '2f/c{<H66!3x`QM#/,#Xeu6 q@B)<chZG(tukJ<D<M>0cj(O0k3aKL7yRGF@O~kL');
define('AUTH_SALT',        'u?oxNc3p$j-Wqa-A>2B0;{B>44_8LAoX7GJ~QSN3tY>0KMhrrw=DVX3Sts9:M?;{');
define('SECURE_AUTH_SALT', 'g](U?A Z9N@(VhKki7^[R3(MiDWtYg){@TZzp1b}44TS2ftaZ-8arifEaN_oLI|<');
define('LOGGED_IN_SALT',   '!9brr(n(+|MpK3 p2Zs4kV(@<ql[:9l$MHDT;2%i,hX>;c:rCgn0J]GrU$~8X#Qt');
define('NONCE_SALT',       '|}9GLoi&Pj99kyQ8.IIyTT^d`PKEZaUs}Ff:J_FGpctK[udYxa>piAbQ@h4D?Fa9');

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
