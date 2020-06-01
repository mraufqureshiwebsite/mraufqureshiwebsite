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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mraufqureshiwebsite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|-jCAaINoPJCtmQU0f6TXTR_&Le9CR{S5RV%^S]zNnVK>7-0/8O/W%|03a11]=Y8' );
define( 'SECURE_AUTH_KEY',  '}Gj8$wy!%?,p.ob+M>2wI0rrDmT4[WRNXaYm+j{f_v:$S%Dbu3OCAAa:8;Av?&_U' );
define( 'LOGGED_IN_KEY',    'XL[2C->5*p9urv;ta8I>Jzy#icf&#1BuE[dkReQjKHH3{[~XI^4!jK},o<F*cw#}' );
define( 'NONCE_KEY',        'BS?aN[:VlZ ,GJI)yV@iSVv0YXJ-(QR-CWJ:HbuZp6Bz=U;c0nd+u)!$xMpJ5FI6' );
define( 'AUTH_SALT',        'f4MqXSxIh.PSO OF]{X4op0/Kp{dxDwBo7A}8fB&V@,)m&zf$Mz|sAzjTK:.paMY' );
define( 'SECURE_AUTH_SALT', ']G%5P.ruc~mmE:-C}eOES^mK>+&2b.8!1s.E%o:p,``oZ>Wo.Xqh^?|yaB)<JsWp' );
define( 'LOGGED_IN_SALT',   'J[[jj[7Z+<TQ:hoPj=GmYzqk<FO1#pT$t*#Z](^*&Iw&ca?>dI+-a1+1.;(|G^Dt' );
define( 'NONCE_SALT',       '3V=FJN]jv8z^rFsLI1nG_^,pI3)LS%xlrDe&B43,xH-*/?3WDIvm8!8B@g7|=sam' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
