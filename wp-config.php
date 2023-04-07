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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'C=8UnB|S!P)jHDzoeT-;EUJgMB3=`,G30b-(RlVK9)[`L1oV}wIZBxt+uQy0l*sS' );
define( 'SECURE_AUTH_KEY',  'DRiXusp&^s`0hcyI4;[ DDDB,mozE5K^]`:(j7-7yka;t{]s$qC)YDU([.4k1%<a' );
define( 'LOGGED_IN_KEY',    'hsac5J~%erX#@p$PU]gX,q?%jg>!#$2 R>gJVw=>i;kWj]U/+RFgyE#0QUv7/%AM' );
define( 'NONCE_KEY',        '9sX9KSi6btPcKQC?j/d9k-O>Wwah;_Qb.!&#22jh !pu]%5uSFN/GdI(?>Ty)|Bs' );
define( 'AUTH_SALT',        '}o-/a(0a=s!)9|:Vd3_]Xzk-_7)}MRcU/SzfERuv&kr^YuX_j-R|e*$7orMu(8VH' );
define( 'SECURE_AUTH_SALT', 'CCv$W`%=&FPms8O9p2iT:*f]#_fZp$h`f|r=-Z4[yV>?w(2y nT<_aN*@ !QanF{' );
define( 'LOGGED_IN_SALT',   ' <Pb]+t?.CzgsxY8=S G,D|rpq/sfIP^hK7fHt$Vmjk,g)){X@cQVnH,u[-qjC~T' );
define( 'NONCE_SALT',       'Nio=vxK ;%/U5C@j|kXo83VzHn2eO U]~.%wi!o.2HV.?ol0X3^,hpJc}__6_3//' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
