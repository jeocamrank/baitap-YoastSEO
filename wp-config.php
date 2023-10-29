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
define( 'DB_NAME', 'clothesweb' );

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
define( 'AUTH_KEY',         '[n/om803GO0YB:9eWB=%e$?[UdLe&r[g)yi:evrZ7XjtD{#+DWR6%p;=A=d:R}~^' );
define( 'SECURE_AUTH_KEY',  '~{p86#u,c?@(evcGRaIf]seJaiv@H_%PqKmGb*P?k<=w?2w7zkM9N1z2U;9Yo!u$' );
define( 'LOGGED_IN_KEY',    'vp(D!nQD#i^l$heG7KpVpnkHw4Wf1-S$)Cm]?6(}pmxUde3kwF>Df;U2wzwxy2x4' );
define( 'NONCE_KEY',        'oNS[b$}hr~V3jAj;]=UvCxf!)zYU$.B~=@mL#^ JMoB^Go<_3>:]vurc/3g~ }Ju' );
define( 'AUTH_SALT',        'Hdgjjrk&r(n*Jt,kXdRLU1rk{a{|e:MB4!W/l6Ss#sr.Z8W|hw=Z(]#D~xSqtpm]' );
define( 'SECURE_AUTH_SALT', '@H*Br$V &)d_@T[oR;7F^{e(6Q~brG}*lfM$!Lc,3rX]P,{5H6+9b&lT]&^P><h_' );
define( 'LOGGED_IN_SALT',   'tn*mx]Y91HH~{w[e9CC_<U 0b+DQ=$>H>V+ R)vkm)3~~2i@=qFlvGRkd@pKjm<U' );
define( 'NONCE_SALT',       'Qh*g>3Zo`V<s1|ik/SeU]%w#n{qIJt[V^Vh*C`(5zz93.BD,g;$2HEK.x5I3J.C(' );

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
