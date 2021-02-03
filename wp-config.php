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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'BRf478_L7e=uhQEP' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'ieK*8_h<braiK}]ENWX+uiJRc|[Yd`>UBB_yM_djq:d7=B0JWP{tjM#RRtpg]hd5');
define('SECURE_AUTH_KEY',  'wO;C@%i+tb_}|Yg!6lah$?-TE|;yINf yKI9-(Au,X_>!gzPMYi::^C/M$2oHsT{');
define('LOGGED_IN_KEY',    'BKD<C5g^1~W?d22vest Ub2KMn:zwUa1z,1euk;Kl-&q-  Vb/<#=}WIA|oK|Hv{');
define('NONCE_KEY',        '1BaH;`fH2lI[T7j>=eDeqyls =x@~#p9Hh1)B!n8+.ti`#PCezU6_A$RET*rn6Fe');
define('AUTH_SALT',        '$M+c1<8+b-mjQM!8JIzing{H=9*h@ |G^})Y#+6Vg|Ku*je|HR[Th`x8g-HI,<[>');
define('SECURE_AUTH_SALT', '!$8RU!oo2b;IT!2EVgX6,d: XJ)`|p#r|rDSo)kxxYu~f+OW,Ud+.xvQ<,hiGd{6');
define('LOGGED_IN_SALT',   '4(-@Ey:pO0E~R<`*3B?XB+= %|kUDxtwT2SQanG_Z306NA|Kd3/j*|#3wc$pN+I-');
define('NONCE_SALT',       '*@A]-p#=.]gD|+-Lw;WE!~t/h/GTF3NH7L>*~8}.{&U`-xNICuv|>]?6j/h.c(RZ');

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
define('WP_MEMORY_LIMIT', '128M');
