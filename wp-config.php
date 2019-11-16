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
define( 'DB_NAME', '1cqd_db' );

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
define( 'AUTH_KEY',         'N?n.Q;Rx$u*@!C mZ|9exlq#3=Wa{D/Xu.aXxLEJTkn7yCoYb;Zo^wOs] Oo#JvB' );
define( 'SECURE_AUTH_KEY',  '<v&i+FbmZO~&w~DZjNM,8Ft%-eArpeC,;&hJ.90#XazSNAR0:.1OnvEXnB>516/s' );
define( 'LOGGED_IN_KEY',    '`t3[5a#s?|P%X]Tk`RU5 wwsTP8hYX;~27M=Hp Op2k,z+*6Xx2i}ZjXj9$KgycF' );
define( 'NONCE_KEY',        '.RPFbd.dt:Xjw=q2e<JIkaDgY2Wz*aVY <uY_[/S8wm3V&HF)%(S(Nz-Rvmtkuqb' );
define( 'AUTH_SALT',        '6C%7TwZg4E<(^S66$5kuVvjfbA-wD|*lWFpi3zcM(AAB6cj$aDCD~.yGUgSW1^=~' );
define( 'SECURE_AUTH_SALT', '>uVYWA]Rw=*wt+v#wl8/[@68d<=J6cd+FT<}4sW}+F,gJ$AVhXIF(uVI~EBI6Y];' );
define( 'LOGGED_IN_SALT',   'D<1Liic%I8#|=pS&}BA210wmSV2Db~~LZI~T])n1MR+uC]K pG!F q0uEATGCyVk' );
define( 'NONCE_SALT',       '>Q7:iFjpU)SH|S!77g4Dp!&_.t%q3KoLKmUMCQ(jt/-UPJ{KD89=)ng,cH@8iC:B' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
