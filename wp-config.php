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
define( 'DB_NAME', 'inlone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fE*3azO[6O?Z!>yDOEO,2;D4eu,~5c-k82,3^e?}5hyJ=1c=E2%.^tF4m>XFFL%|' );
define( 'SECURE_AUTH_KEY',  '|wt9-T:K4%BhqRWq=iTGq)qft|a/l#&6*-y.919!)dR}mh%P-,3**L/a <Xw`Q8k' );
define( 'LOGGED_IN_KEY',    'aX--9UT:z4zx<n&*UI$Z gRt<0=W-KP9iUShfDp>GOAIqWB{~+.!7}y%~+42g_Dx' );
define( 'NONCE_KEY',        '-$Wd;diDVeFX0]:oAruE7ycD#09AyBi&>;nC, 0Pv?[cKzU~LZ:m,`[ w6v|r$ta' );
define( 'AUTH_SALT',        'u=%l|^rLP[-&mS1oK3c/ 0PS,2y2DbIJ}!NN6Twjq~x]r#b)`QUlEn$iP*8U</ee' );
define( 'SECURE_AUTH_SALT', '< D)B`};@5cK|h;2l9HSz+cUzrBJhIW;g>Bg}[&u~quGd`#h`$cS|Sgvw.w+@x<^' );
define( 'LOGGED_IN_SALT',   '^<j@Ft=0o?i`}TCI9^7;Bwbsa%m{{|OM^le:Tbtn5C?U8X^(qN~L(t<O1%-0e~p|' );
define( 'NONCE_SALT',       'zXcXHlQ$l?[Q<zraK&4:~?-!o$YM(5nY[xD^=r+5MacJK&ME:$wRNvWPco~K-~()' );

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
