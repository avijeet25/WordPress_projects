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
define( 'DB_NAME', 'wp_demo' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H0U9vnVAN25Yt6Jn' );

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
define( 'AUTH_KEY',         'Y]it*<Khi#4|M+P(F$jBlMN2NDgA $Q-v0sO!mC+b?Wned6bO1;1h{i&$^ 5Z*Kl' );
define( 'SECURE_AUTH_KEY',  '~H7<_)*z]1.G`Vx:8C:/A/`eLL/^n1~[h:-GDHR~:DDySs;7!}yQ+iD*eJNt2MTc' );
define( 'LOGGED_IN_KEY',    'P;Swv?bTwi,j2VwDHDEl{62${DAAO82rt&T;,bt!qcJ2wLNWZxRlRmKzt5%3G,^F' );
define( 'NONCE_KEY',        'q5qaoLUT4W0%E@fqR)0&B|EV.~xsN;|A&x5!:li_H@^DXV(R/{!S_AT?|DvN$fhd' );
define( 'AUTH_SALT',        'fBed~?gu]}S_v8@3ln-GyvAo(xlbglAon&nm_q{GB_KlRM,* @5%CpS?,T?hVR8r' );
define( 'SECURE_AUTH_SALT', '#m;.}Vkf3GBwBJ]WmFwk@z*acvoXU;Z1elW^7Ek9<415wL<-g8XNxd01shk9fb|i' );
define( 'LOGGED_IN_SALT',   'O8{`2O/u=X<Uj-H1pxT.p{`[UWz>=ph^`;&ao]G@B>i&x[a7VjfH`yOUA^XxJ1=x' );
define( 'NONCE_SALT',       '@=?iK)x>!/$]i-{{*OCocA_Ii8Q/(QMJT7a-xd/A{Bwtu0Ktg,pc!OylZ>7Og!fc' );

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
