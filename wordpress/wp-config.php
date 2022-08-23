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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'm >T]LQMj[nCmEMUiV+Ds*.<85ANW=6zcBxlkYi4ZpPnkFjiBOy]5RH|dC1ezls+' );
define( 'SECURE_AUTH_KEY',  'jZ!L%k>N?_]6/H60Y%.K$hSklx!DrGZMIIJyDqK7Eg_s4QZa-f[W[Ad]kJaB[ TJ' );
define( 'LOGGED_IN_KEY',    'Zdi?C=T>P#%.ANEunl3o7t-8B0(T#0KP&stwr!WZ_e.X1tnYi}!a-HVK678/]j?t' );
define( 'NONCE_KEY',        '#fN9xrQ*md.|nX0i-3B@8Z^#G*N7(sRSd[(mBCZ;-X*L>EYZMDDljq:[0Ak)geUV' );
define( 'AUTH_SALT',        'o1W{@,uzvhp5s`RDeC5bCN0K)Ku7!K@bYVj4evx$E7:}SPZJE_H}e[t=#fTz{|{S' );
define( 'SECURE_AUTH_SALT', 'n.Vov~+*-^$,3[/[?XG5xvC_rf]~c$5W.w$}r:fWs?n9IH sWq~ihHD{~4T/lii^' );
define( 'LOGGED_IN_SALT',   '=isdC3`^e=BcCBa}C*(]dAk#heYDFt:TZeI&2J2}7GceT4,<5(P)IG;K(7.=98@h' );
define( 'NONCE_SALT',       'Ggu}cv85 N.;G|gyVFg]1o9V%*52x2.O)Zpkt=KFOilOBj<9*ZmphB lH;k]2C2y' );

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
