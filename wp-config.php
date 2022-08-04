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
define( 'DB_NAME', 'digi-hub' );

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
define( 'AUTH_KEY',         '#XjRlT.{DjR{Et<?6l47yU=vqtj7`W[O>qQc@H^RvqWmYxWN]Z/^~YU?0*tLG(@y' );
define( 'SECURE_AUTH_KEY',  'Pw--dK[i7(]1xS.lK5_G?{8D=SNikk9G<C,p|q,4$|xHr$qFt*S{BL<HWcg<a/q~' );
define( 'LOGGED_IN_KEY',    'EBc#+%-ameknB*r`qai=%c^^:a)lEqsAix`JU[)( *tAc}R]/GiaGUkg/Q:I74S_' );
define( 'NONCE_KEY',        '>-dnh3wF(3zhJ03ovhN|L`%4Z:X9<)zvAEj.gksD=+8.rJp6}keki )~zFOkXZ#w' );
define( 'AUTH_SALT',        'CAp7nTFb=g~0|feDT1BI=aJ*I$eMHiWu7K3n:p)^o+2#p94, <vRj35p{%A`q!Q~' );
define( 'SECURE_AUTH_SALT', '} iJV!X=J}Drr5P_@urL>wv+fH*>1:]Rg<WD5+l)Ue/_yfF|nmcNzS/Eev5LZ0|9' );
define( 'LOGGED_IN_SALT',   '3K(3-L~ _L!_LO7C.F,p6yjZ]U*QwIU!@,2S9ME(UrA<[u5x-XAkn_,[GA0C^S8v' );
define( 'NONCE_SALT',       'Yn;%Y9equ)U=HCnd-HGrRZyJa<LyG[>5/G]&j2>UMOrw(Z=N>=!&t)XoBS/<si8B' );

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
