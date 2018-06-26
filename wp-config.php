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
define('DB_NAME', 'database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         'jl/M$wl&?SFzyiVvK?}jY/tP=b&Of0JB%%ZRf@|Iyfs21j$q8:+L 6meLj5m5<lm');
define('SECURE_AUTH_KEY',  ':=YDM_D]$gE%7R0{e@`rP9<@FSH?Tzt@@osw>Lf]z6To;eE5[mPYj^6N@]2A[5&3');
define('LOGGED_IN_KEY',    'qA>uwlS/s&lZWL:r[:.cqzA)}vh 4UC[D{U$y+ZiAae[j *Kz_Df?@Nz#^*Xlvx(');
define('NONCE_KEY',        '@OlYZ]/[Al39}~JKh;vgX;rV^D@N~5`fu5,p?XD(Pfgibj*U1OED<8M6Hd7!c%bm');
define('AUTH_SALT',        'k0akbE4swnd.X;0CTXT<I#O~FjbYACW1wS2u_`f,qre(&r]/I^euhLhA,6CI/3LJ');
define('SECURE_AUTH_SALT', '|/yvs[$7UU>ttdB8ARC]68&/n9C&oW`$E#&=hD|^pDqD@j`{3-~b+Z}Q>7{U;< i');
define('LOGGED_IN_SALT',   'uS,5Y%/T?0i)L/}czhyj1IN/%koGH70uQS`Z#,B9^9xo3fYY5D$|&Ini8&Md^qm0');
define('NONCE_SALT',       '<mS7$_gLSA-AC!xW`S,q]d{G=%<7J}PGttffu4U?wUY .hZtY9l$agV<uk6y`jia');

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
