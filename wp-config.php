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
define( 'DB_NAME', 'erozgar6' );

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
define( 'AUTH_KEY',         'c{xxMrK8Dm(gJGBy|El6cC&dANn_*|fb{gL2Yg;DPN`zsCPBc3w>i]y=S^f:A5g8' );
define( 'SECURE_AUTH_KEY',  'f|s;{bb9plQxAwHfft_!=tqDP.35f3L_!(?E,6M)e^3h-Q?j#f3(8%exd|bJ.<w/' );
define( 'LOGGED_IN_KEY',    'acXz%>Od#(Ru+M)*niGHl `x>O,sP.s4&u7Af Z(V2)U:ic~s; sq$~T&EF9k|5k' );
define( 'NONCE_KEY',        'wq2}[_L[~N9r4]vo+7<%TY&D`-~4YvTYO]N@^~I8 k&Ua:h>/FYTc8fCrk6HuaXm' );
define( 'AUTH_SALT',        'K{zsj($MZZ!z]YE5`$c(9??~6=aKKHd,yh(;#hi|R}TL@+7ju6o|>5l{nsgnD+Sv' );
define( 'SECURE_AUTH_SALT', 'W;1|%/+2eU|)5:]P1SX}C^QKsu1Iy~I5b<*u@.LRbcHfX(^8MaUh p7m9ApAR_#E' );
define( 'LOGGED_IN_SALT',   'W2/:RiX7]?JEO1&J>]]x~P6.QS_S/6WLOAPhS:I65oEDJn^y1>LZu=]ktP03UO`o' );
define( 'NONCE_SALT',       '+*pmT0_D6f:sCEk}E6ZOZFvqMO*K>YE#7,2v@SrZRamXOxNouOHno&(;PrS%&j/q' );

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
