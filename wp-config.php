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
define( 'DB_NAME', 'dddt' );

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
define( 'AUTH_KEY',         'vfGf4 k:|QX$eUek0y3u:/mb;&xnt~~X8O};,=gz(#&?Gbdj;|0BN+]2QnbRKKp7' );
define( 'SECURE_AUTH_KEY',  'E51L|08!L7?B}F}R-,9iO]udMr@<|IT=64p}e1yJMI#%Nk>1?QQ%#d?omI!(5W`!' );
define( 'LOGGED_IN_KEY',    'u5E4a+x6!7wc}^cm5br(|uG#2CU=5P[mI6[DiIXS9vL_ C`m!qg/dSeW{G.-J^#V' );
define( 'NONCE_KEY',        'bH=7G+/xXMrDZhJx-CY!0iwsT}#wusP42;bGx^6S|;!=iiTUe@HIHYz1x +[;tv)' );
define( 'AUTH_SALT',        '[k-M$}-1/:H6sJxX=4A;nU-q2>e(}A!{<*OYh)~`.PA#[qp,Ku3hL=/V1&Wo-Hsg' );
define( 'SECURE_AUTH_SALT', '4^`/ ]:N#%Mkk|p4MHD-M7:/3[^s;>w$Id,FZ,_[d Ui*&i#5W+N1lL4<QT|+Njt' );
define( 'LOGGED_IN_SALT',   'L7rDLzXq]au/~hSX_c&6 ILxk$8j)|(l(xMvI&GA1p&0P|jXAMianuKW*!#$VY)R' );
define( 'NONCE_SALT',       'KN&I?Awqb<zOLLh+7J%dKcIH^.5nLd$lCf===XSRBXz?Jp*Y>,uBSSIZkf1tR`)A' );

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
