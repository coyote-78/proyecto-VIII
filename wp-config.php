<?php
//Begin Really Simple Security key
define('RSSSL_KEY', 'ae5NCmyQGSBVvBr2ddr2BHCXbt7DZHdwsAZMSaogNzARGWdwRQ2JSiLNnizYbCMp');
//END Really Simple Security key
define('WP_CACHE', true); // Added by SpeedyCache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'isssteja_wp32' );

/** Database username */
define( 'DB_USER', 'isssteja_wp32' );

/** Database password */
define( 'DB_PASSWORD', ')7K8]pGU1S' );

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
define( 'AUTH_KEY',         'qpki2asprvubg4fcwgcbazzzvwnzqgpvc57g4hdof6pflfaa5itvxjn1hhagjbs7' );
define( 'SECURE_AUTH_KEY',  'xdxnqtelsexp6qcfspfnvdjpbjaejywtgpw0i37xfxxinhqpicavnedu6humdt9n' );
define( 'LOGGED_IN_KEY',    '4nebcmdae3qzreccwpozlznlqra5pcd9t7jr2l6ykn0qgudzh5stcdcxc8gim2f8' );
define( 'NONCE_KEY',        'lktzh2be5ikdsxotrtn7ags8o5zzgw5q3sgqua1ecma8gdfj7wlxdeisrdppyqsj' );
define( 'AUTH_SALT',        'eq6xafbgq1bah656qtf9v2dibwqtywld143ifuxbzhof5in5u4wibdz2ewopvdfi' );
define( 'SECURE_AUTH_SALT', 'mayqjwiorarbkai9pzcsb4ujrlkxyzmrgrouckupu2ml9wscjhd94mtxsr00ndch' );
define( 'LOGGED_IN_SALT',   'cevomgmyn9ltshadmy1i0f1cql8fdzj9acdrq2z67qdk26zaqtrace2vjlairldv' );
define( 'NONCE_SALT',       'mxpwnngn7jfd0oywilmdk1efu5tcksyjyvvpyzglj7z3vszvu0avw4mlgtyki86n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpil_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
