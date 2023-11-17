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
define( 'DB_NAME', 'magda' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'LMI)E3[JM7[K`AU5Ts/;hq)K:LUB&3Y/eQ5Rt03iP1%7*]f> G>+rNLqK]Zca6HZ' );
define( 'SECURE_AUTH_KEY',  '@=umU_=>=V_N&)-bvS=ZSu*05DfiCHVa$qq_xD-fawsW]--EoEx-&N26-iRa`1^u' );
define( 'LOGGED_IN_KEY',    'U pZuz}?;*>rSy3+![/_yQ.Y3`kko/}@Jv1,j}@|Sk34~^wt?ffjHHxjr@MgJB}m' );
define( 'NONCE_KEY',        'JZ -WgW-s}NCiWv&T$*dXXp)5CiY~qAz|]B?+d&N^;sjG$-6FP]_- DkiqR@I@+*' );
define( 'AUTH_SALT',        '( TDVl5+x)mI2k8SqLn}JdRZ$UWKTeC$31-_gDZq?SA;5B*;7RL0b56Jvx*fk;=P' );
define( 'SECURE_AUTH_SALT', 'l0@g_-(Frp1QWQn_u>vUkj^$_OTBk>]}X>!T+4|m!l9 Q;jp~pjud;n+Kh?L}3A.' );
define( 'LOGGED_IN_SALT',   '*e@~fs/b0-ExYpe)UhLfcB9aR*9O&GVb4J;ae Ql+}c$13g#~aMeABFLhc^c}W}Y' );
define( 'NONCE_SALT',       '?^Rwvhiz}7l8 4Wq>iV2cYy1.QE}@mzfR,$33Jy41a)oHZ~kAr=BW7-^kvRehE3f' );

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
