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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hubru' );

/** Database username */
define( 'DB_USER', 'jesuslopezadmin' );

/** Database password */
define( 'DB_PASSWORD', 'JesusHugo17121987.' );

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
define( 'AUTH_KEY',         ':M{pwK?G!UkcQ[pJ%B(#1q&4PE_9oEHxFuQK+d%qt~f3G%/0n&m$`@9jUUrN#k]E' );
define( 'SECURE_AUTH_KEY',  'yH#)%on0OP.}m|IXE-#y^.&4m7]=x;rO43yhwN68 92ls.S.4@Q2Ry[4W-|*Ah^A' );
define( 'LOGGED_IN_KEY',    'gwVZoKE+o:. TH<A^>enTN5[XmV5{24#2AS0^N7 _,w+y].NCz@pMQeY: l~SG7i' );
define( 'NONCE_KEY',        '6ie&z/}epADU?%r@Yvr.um`W`^v!y)}Pb[_E%c$^L}3u#vzg#,V-%L}4[npVVR4X' );
define( 'AUTH_SALT',        'JvQMjwRl7k4+:qR[K{ B56r#`Woh/;/JF*{t)pR]Q!U]P/_O?BuU:H}@6I_&&;_?' );
define( 'SECURE_AUTH_SALT', '.-}5-n_ZJ|edgac>|p27Z;IyH^O<]Q*VcSY_T/dlp6Ra.(gyHwDklU_-g,`>9fmX' );
define( 'LOGGED_IN_SALT',   '1lKJuZr/x%GOU`PhUaUl}@hRu%ksITao]/7t[TW[N/TBS~pn9.s-iK%;ML%DU]3;' );
define( 'NONCE_SALT',       '-M./r8Eq]5RkHvJf6nc;P?kaO128`q:Gfr}gR=W:e5VjC41= Rm&@OJFXeEY;zPe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hb_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
