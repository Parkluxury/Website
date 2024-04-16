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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u862132972_5t6EY' );

/** Database username */
define( 'DB_USER', 'u862132972_i9hPX' );

/** Database password */
define( 'DB_PASSWORD', 'Ihy742V2Ww' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'oD%>j,`S;?^W45-t8njw:DG?A-MhC$6!UHmV&}cyu:gv2fftc*U5bw;e:`uarZ7F' );
define( 'SECURE_AUTH_KEY',   '2lF%cTM2q$4 HRFfvb.nxLXfG^CuN:ATbyIgqcd|Fa@!$mEZg*wafef2CcpbT:<c' );
define( 'LOGGED_IN_KEY',     'G+6_aF33Uf_08yC`&&c:}R[oen??JoIDjQ5paBd*2(j|*%A%Rx!6t_]@tdZvszpA' );
define( 'NONCE_KEY',         '9v! ~~UwDoV^H|m7i-*/+t0SkUz~|5`w#{^Y>/<3xqF*RXYq^>xKGCOAO$gE*r2_' );
define( 'AUTH_SALT',         'w/>%)mz(G:$ {et#h*A0$krN|?4EtYp)j9Fup|w$C`C-Y?CG$b+%]7e0r.~*z#H_' );
define( 'SECURE_AUTH_SALT',  '5scac>&K c^rn#+@o ;K4;)naqH)^eCZyh@W~?/!^&k~KynP6BduASzUAH)B7,_5' );
define( 'LOGGED_IN_SALT',    'ifh)<{2Q}.T3VutV|*MDChg)]e)X:S7jq(+bW}*P]X;}%kO+(wchkM{&^Nv =EYf' );
define( 'NONCE_SALT',        'p.u1Fi..(Zt57VtTnOfG=i?KEf<|]L)t#A7C|n4$<7VAy7C9UyN}=D{:v>9;S8Eg' );
define( 'WP_CACHE_KEY_SALT', 'B+nMQW-b9-&N$V|(J`{IphE&503p3/g(>nbb)=]orsgw){zOR&=E wy{}Rq4 zW9' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
