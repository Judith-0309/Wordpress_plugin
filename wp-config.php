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
define( 'DB_NAME', 'GETECH' );

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
define( 'AUTH_KEY',         'H>3],f`q^lfxdd,~yhI}LXZ-`)iBkXnZ!>Gm<i`qg,~?rR}cgb,w?9d99i]zQ]?W' );
define( 'SECURE_AUTH_KEY',  '2tfXc!5rBAJ2Jf7z<b4o1J#l,]3@p-bd=oI& )ksntj$9<Bavn<On[46dQ%&x%pc' );
define( 'LOGGED_IN_KEY',    'Uh-aAP6,rC%596W|+uP.j;/p=@Uk>QRWry3Z523$11FD&)Sh*sjLne*d[ofU9`[4' );
define( 'NONCE_KEY',        ' MTEE%5ij94j/xJ/@Nlg%>ptHC9^iP{<g($<_Wig)kQq<@e8:^C+Ya;nu)xe3xS1' );
define( 'AUTH_SALT',        'u@?+,Ti?,L$F-/~aru,iK2HpQ;ohw{PqHoZ#Agc|K{5s+4G(]6~r;Iqk8`M|diA5' );
define( 'SECURE_AUTH_SALT', 'ed *-LQz*O{gdeU}0Jq)e)kg5XB{ Qf_31P,z<.$<H%#Vi)eYu[^)<I; t%oCWNq' );
define( 'LOGGED_IN_SALT',   'aO>o@/:C c2I&|0wlc2O*-ngGHR>z^yY>[5d3%nYrQ!w.b3agUwRj&q:25z4BE$T' );
define( 'NONCE_SALT',       'xF-t-^6}G{xs=xRBUXM~|~RtzkSAOil!k2_x-RY^]{)fKVXiJ>$Z<q4Iw_Ru!P8;' );

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
/** FTP login settings */ 
define('FS_METHOD', 'direct');
