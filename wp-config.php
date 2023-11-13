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
define( 'DB_NAME', 'figma' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3303' );

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
define( 'AUTH_KEY',         'S5nYa]{p&14.~+HB#YC)%:5u0{>.CRXYbzvCjewTfK!#P4F[5+rL@$jmk@!qUovn' );
define( 'SECURE_AUTH_KEY',  '0*1jE%F_RCCW1mH1bse|5~YPsySPxe+$9U687pr/:I`D~6qGi/pY@#,$]&%$7<;7' );
define( 'LOGGED_IN_KEY',    '1-|{f!!d1/KqJoZb*C~7J)9T>^6nOIIR&71YFC15B7f3|)>=Ar]&85.s!<-=|(V&' );
define( 'NONCE_KEY',        'j|=^*2`qBH!1;<s%M7hem9n%D4b`Jf6FNQR?[tD|W6-/y{p%_;9su]#+Y&3Eq%6V' );
define( 'AUTH_SALT',        ';dgvc0GV5(t2y@g7$`Eg<YI1EA;-O10b&UUm=G{ZN=G]q ZmFQKt(+%U83=X[F@x' );
define( 'SECURE_AUTH_SALT', 'Cw4u<50~;)/R|Q>Y+xX5GVu>|=Apzh<H1V][+0S!FYIXzsBT9i/h 14<^yy]4O0X' );
define( 'LOGGED_IN_SALT',   '<3k:4H -{bUVtDV&@>;>)UI=E1_EFt|e<bO1qIT])5V!,EEC_:c2,c1x/V[X%ADd' );
define( 'NONCE_SALT',       '$HexzNO+bLux-z2R5,xwHBC( >EK8<G~xf5fpk7ETp!.mj}1 ]1<voT*oY>(5YBp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fg_';

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
