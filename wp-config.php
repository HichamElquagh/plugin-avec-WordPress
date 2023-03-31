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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Xz BIbpi)Y0#MLReg$^N)TEq=L x#M^Qvw2gQowpoXe5p|037v3`&-8IU!5##/pd' );
define( 'SECURE_AUTH_KEY',  'o7Jj!5j4BOq%e%l9co(`p6~d$TOK.v)8nJ,52`WXh[Y=Sv*!i %RJ[nS4rtYI6a/' );
define( 'LOGGED_IN_KEY',    '9cgGa1anpq !l|TJNb vVrANg2+l`h7:_(LoY%)Q#^Y6aOqzvwID2z|(?)g{~Xz9' );
define( 'NONCE_KEY',        'a8O>K7]L57*x^O@>Qnn80_@.*$d#nI2 @1;w[:-S8d#go1zFRG:VU8i5u67gZ&@&' );
define( 'AUTH_SALT',        'aFSQA$[_-g$VSS?mTs-XhkY5c4veH+[/LiXwYv@y-RiFTT,7e+!@:<G;s8fv,I}m' );
define( 'SECURE_AUTH_SALT', '>L.fT@nN6A>^1a!Rv7k9||#[59lH6%_/+1+x_zWa=E.-5L}a:K-Ah4.~vzY W&@j' );
define( 'LOGGED_IN_SALT',   'I5oGVLb(>N&[BMT#AAx?;8Z;E/;.I6 c%T-OR/ON>SbvL,[i.#lqX/^_,Stwu)=}' );
define( 'NONCE_SALT',       'LlKdu!Cw,bMQ.}p1(*TrpoP>ZKec7Wm;%th2I&PAmb2vdi3hwns(%]=N2f:wn,E&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
