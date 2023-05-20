<?php
define('IS_VITE_DEVELOPMENT', false);

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
define( 'DB_NAME', 'fashion_blog' );

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
define( 'AUTH_KEY',         'AU,TTvur|0X1d>J:slX(Qusiax>5=@wZls}frL9T6(w7@/*<wr%qV N}W.9XROw(' );
define( 'SECURE_AUTH_KEY',  'ymGrRCWKe)1c^z&KfOFhu}v%6D&|]Z6glEJX*?x:%I>mW10`bK8p.74tK)Jpz;>x' );
define( 'LOGGED_IN_KEY',    'l-$^cp!WSopgnc+qI-.T_2[JCvdiV6&i{EK*qbpvU)0CKKl8;/PDG.}9XFed?,Rh' );
define( 'NONCE_KEY',        'fJiOiI|xs>QV=/qRM;;`fE`xmNg>CpY%zkX%J}D,WyvXQ#G7](},$?,h^G^-b^s@' );
define( 'AUTH_SALT',        'Kgl{L ~O2:<bDbkT]~G2~aSm+G]tI,7z4wU%zd3[U6vn@}ubac`#U`~k=IvLhpgo' );
define( 'SECURE_AUTH_SALT', ',H;oMNxk[_E<?_:_:Z++o+5T{7m^YlZryiNTQ,Z+Qr7|s+aqNPO,QXMPyS!BNb?L' );
define( 'LOGGED_IN_SALT',   '5iS?l3xB8#PzQuu@OMVv<a]U.B1E*:hV_+GaeEci/E^c21H67u-&J4(^}jje<guQ' );
define( 'NONCE_SALT',       'u>t!IqAaa:H7eBsxo>&4_bq*&g+I{Q#iUl9`neb}pr*9/c,bkW4#b$&~%l+]_:zA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fb_';

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
