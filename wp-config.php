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
define( 'DB_NAME', 'lifecoachtwitch_db' );

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
define( 'AUTH_KEY',         'pM|g*DAJG{eoJpmB7V /qk`!-dMY7+{u>U$$P<dy+M@.~]:5SQ5pY*3sVKbExtZj' );
define( 'SECURE_AUTH_KEY',  ';Q7j9Q8]G.00]TiKk>MazqJ#]I/L[M2oB}sVFh)o=}{G7T`#v9N:c ;Nx$&Y]95o' );
define( 'LOGGED_IN_KEY',    '.r(ZXm/3wigcYUAnd4J@,1WL^xj2q9Wo=xuOS.U2,CEM/9{,}h?hXPkH9qu_7[#u' );
define( 'NONCE_KEY',        '%wwGA%vI0e,m+}>LYm3;eNn*tu8z3jxwmA&w(Ev]k6sq}J9Y)I$$Z>Kq8R7wlww#' );
define( 'AUTH_SALT',        ')I]_dN&(Ym%L?`RQ~7gs+:&,=KWGHw{o`{qy|U4b9;~{+;);U9Z?R![%bhWl+MU{' );
define( 'SECURE_AUTH_SALT', 'GG~DS]7uea:Th)t0#Y&Gdu0rRk2<;2apGSToDS4,``mS_}[:_-0>p_`PgC>-sqt&' );
define( 'LOGGED_IN_SALT',   'L8;P(u>=q7tN{M:n:q<jiOOHwq-U;cF84?8)*h9d|u3)^`&05f.uNEu-Q)/@Qn87' );
define( 'NONCE_SALT',       'f!PRt<X-H/{m(B]Ksp{EwF>X2_hg0<f,6}?{3}!pyt~U%H+m]>qCcT1wZdv4jCh#' );

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
