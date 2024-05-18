<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u851628982_6tg7A' );

/** Database username */
define( 'DB_USER', 'u851628982_wQQW7' );

/** Database password */
define( 'DB_PASSWORD', 'LfLy3TT4vt' );

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
define( 'AUTH_KEY',          'wh@qAg:4a,?ly{Z@R?Yyjki( 3[<QxRgG#`D`5D )O[I=m1*uN`[k4Livz]tEI2v' );
define( 'SECURE_AUTH_KEY',   'JPQU&(mI%jm0lia!o+oFLY;T{:YisQ#C{o?]|`73m0N`ov,`[wh@Oy092/>i K2k' );
define( 'LOGGED_IN_KEY',     '1j^^tUp0r?wmrm7c8V7^T`L~GsI8Xei(@ 2i3rUF<e[Q0P@o_8*~[U06qw/ug?dC' );
define( 'NONCE_KEY',         'cdnnBhG^B>j@Q+.{bDm8r$:$8W]tZ@&,84uAu1u$TZID0d[N,z,USs7%.j2[OUc7' );
define( 'AUTH_SALT',         '8;SnL=fA7+W[63-kP)fH_4+>GMT_<VjTRhpHZY6:KJ/KAyXM2Z];7}]sSGu<d;|P' );
define( 'SECURE_AUTH_SALT',  'Kmrv]@:|]z~_Gftd/tD<Z0tzZ2C,TulY|N`VY6hH27]C{lwGd&#jGC4shPJ6yAC(' );
define( 'LOGGED_IN_SALT',    '8.@R`B8&3MB2Io10W,,bOX%IPNU.XU7v_Iu>@4]^,;/5K09&_M`ge5x$0G-vL(t=' );
define( 'NONCE_SALT',        '1I1o/w@9;P/qFk(F3D7Q[tlI!wC%F|w)&1$Z@L<J*)4E*&dDLkfIxKPo=fkAHEP^' );
define( 'WP_CACHE_KEY_SALT', 'Vbo@J5Q4uUA3D+DFvIy0Vwoe2}:<T0%iTGf4+ol5}<Ed[`3I#r<V>./?LvJC|oeI' );


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
