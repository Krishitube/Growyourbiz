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
define( 'DB_NAME', 'growyourbiz_db' );

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
define( 'AUTH_KEY',         '&z9_Lj3Vh.,p0D?^-27xqj$ yEIe|(nF2M4ThM#A~S^tc,W Qckj*8{Zl|Bk/&!r' );
define( 'SECURE_AUTH_KEY',  'JN{fU? E{ xWPWj,b.g_e6zLcB2=2e4_GicP8Z]u13Sj#[FZ{#Yq;x/QA/Ty-#pt' );
define( 'LOGGED_IN_KEY',    'U.+UtWG}]bpO81!rR1jC)$q{~wb;|Wp[HyNgSDhN[{w-zaL7;qC]Si0t#vuZAN9c' );
define( 'NONCE_KEY',        'mTyTy<6OWkj2$7Dtdv)}?8)0{eFnGUFlz1emz_Q;0sI]fR{g7=bScQNx/EnzD6wa' );
define( 'AUTH_SALT',        'f p@9bpIdT8gGS`kua.G^Tt-yL|>^VY)[{4o9fM}~6W]WVWP? K+~(<]M~ 6C5Z ' );
define( 'SECURE_AUTH_SALT', '-!HS7;Lyk>g=g/RZE;^xe^W`PdCp^/dk_)$<2s=h6:M]QN9_0]9S(VS+B54.WQ!;' );
define( 'LOGGED_IN_SALT',   'D[Lc/gY?&$*g$V=lOKm KwUHtcH;4HqWGRqO@kI{nPoI2gz12l5I].3Rc#MA%<$/' );
define( 'NONCE_SALT',       'dI9j(R.^$F[rK^b&R%3XR%U.ZkJX#mHLh2Q`--!I|S{xjnH}m$B5_%^QoG%OF0-K' );

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
