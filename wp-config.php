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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7w#Fu{D7m`Rt/,#:h50v9)kkiKQkZ.kh/}kIt]V=S2&{u)6EEpDwFTH x,-`A5%-' );
define( 'SECURE_AUTH_KEY',  'k|vvKGs@K|]9{1Lkh-T*SQp!fLUr!,^^&WGm{*}Pg]#rSr`pwj{^lF6Y,Q%Aa6f<' );
define( 'LOGGED_IN_KEY',    'ngW1;4rv3S{o6^QMb`o0Fg>yy<$!6]R(_vSrA4dK2w9:GI)5GcAEYxy?iV D+F4I' );
define( 'NONCE_KEY',        'Qzym_g|THRDN!1V}ZRmM[OED>K2|z0_55/tvh~!!tWAy>dp<&A$TNbTOyEed%AFY' );
define( 'AUTH_SALT',        'yH(c5tOF5t/.}D4`)u[n%)DDBxLA_]vhxC<Hk1/:pQslx<?VV-WX~11_u7&B,Xn$' );
define( 'SECURE_AUTH_SALT', '<vfdD!sq5CU.!kwA<#XE,hh>{B888M2v@sdM.?LR#ff?scPP&x{D6ZZb.$;EPNv8' );
define( 'LOGGED_IN_SALT',   '_-EHh:XHU(5d#XYd#(`@H;2.bZLRNQ|tzgFJN 3u8+=PU#@BsNBC+_o]IQId|`+e' );
define( 'NONCE_SALT',       'e7Tyn9gJ^c*~0u.l#dDmXv hPw!Xto4 ?mCC2~pOQ?_j}-W[6C]s<ztQ6,BmjA&Q' );

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
