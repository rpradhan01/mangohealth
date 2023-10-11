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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mangohealth' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'IPEV-=+`[[kpTfFs>FZACB9.W.y14DK}!{cX$01_J M+ o:qocq-m?<!P55T^gDu' );
define( 'SECURE_AUTH_KEY',  'OkpLd8X.C$)7(}s=d+#fuIBAxb4E!hd^,1A}`*V_&WW!2?_N X>;Jtnoqk[h}*?~' );
define( 'LOGGED_IN_KEY',    '?7XVF4QU=EU]1d{rzmU_z%2%MEp8xwr6+H!.U_+o&TD@>Zpmm^Y1JJI.:YI3+|EK' );
define( 'NONCE_KEY',        'm1-.{,17wJoYTUY}U4=tl9f#Libz `9 I7&@hhz`byWs8^>KM5Ba=>m?7L; u=S3' );
define( 'AUTH_SALT',        '-4Wz)6.N5F2 .k=>et,Y^#%E~z( p>I6<B]R;va9|%+&,j5f*E3wyrGdA`co{l*T' );
define( 'SECURE_AUTH_SALT', 'wu6FcY+wYf2,6!U+?L=tE5w,NP.?2GO`<c)uQ9klp;Rm*MFt@;Ai=tUU(L/HTm=J' );
define( 'LOGGED_IN_SALT',   'Y_0C]d&PmGCU_>y@oAUH~@Q73%tb]|Zxk@LcRSmnPkUib>dCIyaa-+BM-i12:cn,' );
define( 'NONCE_SALT',       'f}t=Ts:GYdn4*Tz9W^XP r.w6bYBH=%tje}!u7)fxC)CcZ*kr=UAH,`iT5Z]`@0+' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
