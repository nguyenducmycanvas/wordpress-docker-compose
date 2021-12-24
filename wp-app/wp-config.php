<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z5Ke*MGq*])O^:&<qa2yD!)TQ27,btUKGh&O5i]Tg00DmtAVsRP_iLoTMO=btaZ9' );
define( 'SECURE_AUTH_KEY',  ' .,LzxQyZ5 8fU^( >p?1Nh ~Igc7+gV/RBRarhljhMaa`S1H`6.P5ay[&G:B0ja' );
define( 'LOGGED_IN_KEY',    'g ^vetI=q{Pj@!.l.q#k5gCte_hr~8yT2WZ=QOPOhw|p$h&!-]cLVwPX3)]I5mYv' );
define( 'NONCE_KEY',        'DkctuvNXaG5~xfU=e-RC^m2vyX[;$;YHHtvVD><u!GZGyiR 3{&KR-8C$t[nplm[' );
define( 'AUTH_SALT',        'I| ON-Q@109j{~iDUkc8z?h.~Yld5S/`n<m[KESZx.0qE`d&n5]pE7+LJ+P[Ej=p' );
define( 'SECURE_AUTH_SALT', 'E([il$mb]a<2O=2N{rtnRh}VC6_G<0tzHC<>^_5S+Y~~n{h1;5%N>NGmP{c^-md3' );
define( 'LOGGED_IN_SALT',   '.kQ2*y*pCq.Zxwhz830Y?Z.?Rj51SeI4z<`!<EQ197d7E.>TK%evpPlK8N4zumMR' );
define( 'NONCE_SALT',       's*c@~5mLa:[.+^tLyElcf7}x_wufFqB_S{1PYko;2)Vd{;N3Y6VYcwukaWN8<35E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';