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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '?u)b}psFQP{O!yYwIhA]ngvk7D]5pD&#B;cXJ{#$K{rB*7BxK$0-^N36YAH$f7+[' );
define( 'SECURE_AUTH_KEY',   '{!yZ:f*a_e+lcjlV<hK@#Jv@)pMhZ%a Q$66?J8|?K%^5dmt%XX})CWvsJ3nw9`Y' );
define( 'LOGGED_IN_KEY',     '~5?&Dm<5-AGcOW8FNlI}`@h&A+oD`w#LOJFdS]rZFUo$R,8o7!Yaz|0?Ddi|!>:z' );
define( 'NONCE_KEY',         'j=E64Nsf;npo`6ad[m[X>#4_gok3</r2DX#CN*%OAjFEC+N27h>NE/?cG]eF/2]h' );
define( 'AUTH_SALT',         'o`,giUs(B*7uB5Mb}f!}a<jG2P8)%|=nZT1{X2<2}:2n(yPD}u<D&QQHh!kT2u|h' );
define( 'SECURE_AUTH_SALT',  't5]>pUAs@f7m38HZ}XmW9|4SV*WcYDyA9N]_|:Lzsfv?Gz-{Y;kV|:o>enH/`UP(' );
define( 'LOGGED_IN_SALT',    'Fr+&sQ`.=%nO?lVi/;VeJfV(7:!^`Y!Ej+8+7^A)Tz>8U]+=;7d-DIuU!jK7Vs4L' );
define( 'NONCE_SALT',        'F;i,n^*-nZF c=Iup!|F!>L4m|u_yUgq1hsJG0%6A}UX@5_ftKv;or*GK$)U_Yb[' );
define( 'WP_CACHE_KEY_SALT', '>@<}A=B FJ9oC>^Ha)FrOZi`BzTLR5x6HJq4],x vK@6lO<Y9@FBz7_;wY:el|wC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
