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
define( 'DB_NAME', 'lofou' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '0fCRVOCb61!i))T>?m0gtcP?/ZJSXp+C_9uXB:y7N<{xPq?P!3IHC.}YJNXhzf!I' );
define( 'SECURE_AUTH_KEY',  'U.}%LC_V!vQ_4y|gHPACL2OefFTJMIyerW<Ti#:0mP|cc0V|sYD1MSQ]&4lK%zVW' );
define( 'LOGGED_IN_KEY',    'cZJzj%oJ=A:U$n[>?kO|pL9H]|b~Am;BXFCkiRo,PE/6$UZ006N*2KzjVC[._4M:' );
define( 'NONCE_KEY',        'az)75k=~<_QV#Vo >Ai<X {Ut]aRPQpdonx*(laA#mjwRx[~-3|zxb#Ys0,(h%,S' );
define( 'AUTH_SALT',        'DIVr+:mWchYQp-50[HN*5l/jMOR/~/?1&g11lU?]DDIgl@>7iqps#@(QhX|rNmL2' );
define( 'SECURE_AUTH_SALT', 'F-twh}O?;#~wz&9y+X0Pvty%=v5vLyA<U6RqI)Q^ed$7|atyGw?0*d-w;}_5<jF)' );
define( 'LOGGED_IN_SALT',   '8Nz(++RE3p;UiW8ECy&vA^l/)%$yCG1,LOZVZ5>UV]H{8^i<EiuSEdSm?@p#`kwJ' );
define( 'NONCE_SALT',       'p2p=PY7_#6xka|,pN(2h-o98A yym6!Vz47Z3C&yOl6,wl^DCZ6p%yN96eO?iGL:' );

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
