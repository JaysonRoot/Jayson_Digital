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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         's5P@C>KbF@EWP9Ik{=!*Z`?8.qwkcsVD=?gt/#d-`dX1AcS=ZzgX/#&[QF!k.9]R');
define('SECURE_AUTH_KEY',  '*)a(iqY.8Lb|~%]XxV/cFU0]!hs9S4pS/v{;48i](B6cmX:xUKWf`oks),nY{:+.');
define('LOGGED_IN_KEY',    'mL!.VZ{hnZDY}t9BYEzzP5#5PUlptv6.CH<Wam}m@#v&]Z}Rm(e92&n)AH|7CH)s');
define('NONCE_KEY',        '2CvoyD  igGrfq>ZC|C&[pWk*AR(p&~q]N3aFXQsZlr1E-Twk>h&]oiQK4+Srz9o');
define('AUTH_SALT',        '7!orltl[;QKWg>2-u,*SOY1<{Vtl:C TTuEAw=fvp[y*MG+3R1jQy<$yroZ[*dc~');
define('SECURE_AUTH_SALT', '*zKst8b=.8(+o:/T=Y@8s8b3 a>!/++ASG6#ST_hhs<l6x+A}Gx6N4VCfOa9&+>,');
define('LOGGED_IN_SALT',   '=>tyn={gz3]j!%5)D7m/94Nz`gmKa%3lm#E6h;@B#)P]A7[FO]yI~d/?nRnUA41G');
define('NONCE_SALT',       'G~d+E)4xql#_!<:HsmuXix}AV2hCru$u$lW.!$0bHQ<W(&hyG(n#jwsdP(6[Dc,*');

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
