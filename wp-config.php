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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '625YdoWNl_r|fE.TySV9T%6Tt$N)6rkz_: %krrr$-mhw,GN~8iVRhFS}~6m5V:{' );
define( 'SECURE_AUTH_KEY',  'x.WfclGaXl)8FYWL5>3 v?bkVgwS*q:bjJ?dML*xpMTz4DXj.#N}#}{(;i|;d7yY' );
define( 'LOGGED_IN_KEY',    '25n<*AF!mX~#<FbtK/lSwuOIcUG!VMIrLV~}_@ijF^GBnpVGrN)HlxZx:H8Z}~Gv' );
define( 'NONCE_KEY',        '|Vyz:zY^v.pMVA>Bq7FolH_8oMjF{]~`~e(^}Im%d-N|%aZ(~=!546=b[(iG}{.r' );
define( 'AUTH_SALT',        'j<x6w2{|Mv;,0.<=plRpIByy*_iV8xz6Aa;Dbtuhys 1L!7(JH+3<J%^wlLWwB9r' );
define( 'SECURE_AUTH_SALT', '=8Dm@gPtd-M,ftu}%`=1(w/oXm9bDbp2TuldbS=G/XqP@CYa{O^%ymh ;F:ufw3o' );
define( 'LOGGED_IN_SALT',   'M?^32T2TG1!P<f+;G(M}B:Z~V`y`}hxZ!RZ2c1=8e#D{6D-]-{MbvsoS)jm(Qa}0' );
define( 'NONCE_SALT',       '#o>7]RD5pj-@#*`ciwnoX5Kbig2eR)x%H_v~fn,X:LPX1~joWJ!bU}Tleav=0vd#' );

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
