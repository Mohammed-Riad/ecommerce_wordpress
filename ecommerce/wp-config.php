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
define( 'DB_NAME', 'ecommers' );

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
define( 'AUTH_KEY',         '3KB*m15|fVVE#pGL!4=5KELegtCmV)r!.TJWX18p4*MU0#Tcct%vTmt/FfA,ago4' );
define( 'SECURE_AUTH_KEY',  ';6xPo(^&><7DMEG:n/6;M^$x@T$8POfd9~~_Xc*Y=a$uwULuM~D5@/c*CJ18,a`v' );
define( 'LOGGED_IN_KEY',    'IY~u@10<ht0z5Iv)OmU)0}A:<5d YJ<y]beUYgLD>ySK_y_m/C5?cp5/<Zs~;>bZ' );
define( 'NONCE_KEY',        'Q<KpKCWJLM34gV9{e6$9}3pI&},xW3ZX2ZB>)=t]BUu=UI6_]k{kRhPDQTV7ciY|' );
define( 'AUTH_SALT',        'IfGS,Qb*JjBC-2!7nk~i5<kUE|%|GP]$!@X6Z?fD{?R`2~K7lTp$+V`rbc(IQm5m' );
define( 'SECURE_AUTH_SALT', '[:A@G:Y>6:KHG*PkAIvt0cPK4OyJDl~{dw=$*ps;m#_,!QgJ6fuLs!nagm*@v|v[' );
define( 'LOGGED_IN_SALT',   'RmW&]<0Tji5dBHb-+1LG2A><4Z(!`Ioib{Jk5{NX4%=VyVUEm3.,PRixWHN(W5f;' );
define( 'NONCE_SALT',       '%AggxdWd%1I,u/#4ERmT~A,!ZnAJN(0(,.lgV%i!,&t/Iv#8RHHSiO09g NqW>u+' );

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
