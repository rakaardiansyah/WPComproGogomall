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
define( 'DB_NAME', 'wp_compro' );

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
define( 'AUTH_KEY',         'KfAey#H.7mw{K1!Hl3wp~1O8*78cedY>{.e~z_%_<ifWa|AQrnsD )x9h/}Lf2XM' );
define( 'SECURE_AUTH_KEY',  'oE|VW2TCzU!6.(|X)Q~H&@lf7|OoZ #4-)KeJ0L0&_`3+cj23G4:G6<Wq@n@=W6@' );
define( 'LOGGED_IN_KEY',    'o@~-WW<$8-~3<F2%pO_Ej`;Vip;dHmEJ,(o{CHC0|G<:FII/*R~|,wO6`?|V!a(i' );
define( 'NONCE_KEY',        'STk?NGWT?]l}oGTG%)N;GQ.&mf>V/1;O&^.N.Aj+QZNv ppx?eU~*oT`M|JJ:B#:' );
define( 'AUTH_SALT',        'k&Ve%h%Rr#qhd$Ze(0t9-.ZuXhMo(N<5iQpjdw]ii2%z*7^N{Y}[sMirO`7pD3{M' );
define( 'SECURE_AUTH_SALT', '%FP-^fD3+uWTK.Y$[6|R.&5REs,cpx5*7r*$1.@]p_8bf,?Mhxgup%(<=K(I@gzW' );
define( 'LOGGED_IN_SALT',   'm7%|X>ljiS5ejaP>vyvA3e)QL=i)H_h5#`(rD8Hq_y|Lv=^o,3frB5R<!e:2oH%&' );
define( 'NONCE_SALT',       'g6AY1@tL%c8N.bzWCsR_^_D<s.-7(Zfn_/M@t2&Q  MO[Q|cUrZ+U.zf`^XP<OyG' );

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
