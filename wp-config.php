<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/cwtwist/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('MMAFF', 'hostgator' ); //Added by QuickInstall

define('DB_NAME', 'cwtwist_wrdp1');

/** MySQL database username */
define('DB_USER', 'cwtwist_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', 'XEktzQ4PiV0xgHbg');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_rPa#PT49LoTSW/P@-/~_Q$(4a^ha#?sy>Y9M;lORd#Z;QcOyZABtBi#zTl2d3GK61qQ4V^');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'ue5AH^GxommpdPBr7JYzSc-4l\`wJ(CV1~GX7~>i|PRXg\`ixsWc-<F8~je>4M/O*R^8X;R');
define('NONCE_KEY',        'r<IO<5!jLSYB6!NrSjM\`#ZYO:@#(BVX/XjCiY-X)Mj\`pP6|9Trl@:6RpV<sqh5fpFg8)~D>@S5Q6m3C');
define('AUTH_SALT',        '<Q=xK6Xax86O9d(!$E\`Z<6oFJ-k/fghM6tNugS2Hz:-gQ~($OdPOyfA1STXWzY~15L');
define('SECURE_AUTH_SALT', 'XWoeSdzQbNq(ry)gutK9\`:180|Qza4Jcn-!-55eTT^)fvQ?xEh):sxZO(8w*u)px$gA8:B<1;qI|;');
define('LOGGED_IN_SALT',   'LfoJ\`ejMhBd_aV:*;ZIfXgt~-y~TbH/\`3|$!o)!MLW^mF3Rhg\`4l:FfX9!)!Z2co(^>ad|)_');
define('NONCE_SALT',       'g~n$D@ZTKWPd2j5qn\`x@jU_si9NYa5@h8\`-eF91-3gIu6nD<EtAlgyp$5|m<dn9GNQ|C1^JXxgvp_(apP$TJ:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', false );
define( 'WP_MEMORY_LIMIT', '512M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

