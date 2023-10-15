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
define( 'DB_NAME', 'abacus-gym-kiserian_db' );

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
define( 'AUTH_KEY',         '6!_UqH4/eu|IE~2g;.)MS;Z`lioy[rP:v181a`^+z(8g/;cb@9buIzKN_F`9=9Fe' );
define( 'SECURE_AUTH_KEY',  '/b]k<MgRPIBy2VoA-,fzeQckZ`AFN=6a=FNOF&r2T]y>P[x^V:|hBx]9Pcib?Qkn' );
define( 'LOGGED_IN_KEY',    'O;S^Mm^%5P)p+=w.Hur0q`Y%_;Z 3s/667BeWSj` F+&L6D-i^J10@fRPcu-vYiL' );
define( 'NONCE_KEY',        'yMKJr@[< jpHcpc[nD.OL]mT>6< e,NcsxJ2^Y4w%_.=^x+!`Pgb6xk@X`OCQKEE' );
define( 'AUTH_SALT',        'FS</@9SHf{WXG9{|gDwJc:Uh$nZEIcq0s9>j9l]JoXnKwoF)`fzaS&?J&~]=/s w' );
define( 'SECURE_AUTH_SALT', 'skA)>okmkE)jZ{k|#E+u(>-j)K_p}S4Jhy=_UHr;>!Ur4iN:XvT4:zt)tVd=mpHL' );
define( 'LOGGED_IN_SALT',   'pfr[@G(H=BH&=_ch^j}vHMqvO_?TU]G ~dSPYmWP{%/r5M^z#L#kz|L9E[{U(Z(`' );
define( 'NONCE_SALT',       'kWftK|W9y/|s}z:aW(.]Z%GZNzU`0^ |63(;>+V0OJKFNrwCo3j~O*Z[1)wax7_G' );

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
