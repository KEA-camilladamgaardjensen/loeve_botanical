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
define( 'DB_NAME', 'camilladamgaardjensen_dk' );

/** Database username */
define( 'DB_USER', 'camilladamgaardjensen_dk' );

/** Database password */
define( 'DB_PASSWORD', 'Cdj.5956' );

/** Database hostname */
define( 'DB_HOST', 'camilladamgaardjensen.dk.mysql' );

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
define( 'AUTH_KEY',         '3.c<@v{Fos~*QN4/1qm2#AGc1YcxD3LGEB`m{c2sx~gp}Ww%T.Sz]ZtL@z@aqR f' );
define( 'SECURE_AUTH_KEY',  'TI29F0KYtOt(bMDonW8})+~g{^S[(jj<?eG&8odN%A=-}|Yz)ep+w[S=5)5k`5+j' );
define( 'LOGGED_IN_KEY',    'hXx)`f-t;z| ]aV?! =0B)]9?E}w3*9#6.D1:)%2g|CS]Xs@D0ml)~qg45K]e-Bx' );
define( 'NONCE_KEY',        'n3Fy0_@Sjq5a: XG%a3Y m/VMBdDgBI|1_f ^J=oxg/a`1Uy692x0~~o/bcBddy-' );
define( 'AUTH_SALT',        '>0!k(rUofuDf U<=w[GsLGl[ /fz7FVS&8GaY(v3F)8&1=Gee@/@i(W/2NxUmbah' );
define( 'SECURE_AUTH_SALT', 'WY1N<x*=}*<^*kq5]=aEBv.Nv~uNpV$+^6UF`d^lEvOG{sO~-#{Y!Fx@p43(Hl`+' );
define( 'LOGGED_IN_SALT',   'XAeP3F/2zM3o8F4texZ^dS3LM,[<ZRxo7c10*CfYH<_r:}67{6reaImQ+R40mSx.' );
define( 'NONCE_SALT',       'J97!T$naAY8rYi+%YV}T.~9 7&TdxA$}UNv`Q@kHmWX/n,n|L3rKECbZF3gB??(t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lb_wp_';

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
