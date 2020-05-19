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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk21/3406332/www/moodlesampletest.c1.biz/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '3406332_wpresse1b10de0' );

/** MySQL database username */
define( 'DB_USER', '3406332_wpresse1b10de0' );

/** MySQL database password */
define( 'DB_PASSWORD', 'F_zz7zrVg1zFDmR3pj7hPkKOI4hRbrqs' );

/** MySQL hostname */
define( 'DB_HOST', 'fdb18.runhosting.com' );

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
define( 'AUTH_KEY',         'z I&F65&Iv:v5fh{chQXIiXa40j^9v~XbM]RA!Q9@@s~YH`5PhRV:BSdmpTRh*l,' );
define( 'SECURE_AUTH_KEY',  '}>&B?fUAzlX[i_v-~CmHJR5i{P_RV059hbIvC,}AEkYt9`<wnqt_Ru~MhW_6(2>Y' );
define( 'LOGGED_IN_KEY',    '|Ock!ERcbqREPLNMjZunD ?$c3yi/a}=PE)9wbI*i3+e}5fRt>[LxNnL-,YW*cMT' );
define( 'NONCE_KEY',        'i?KR8p^`l#ONli+@C>&%O[[m|cFFX#^zG|8.t|RpA4<Ku^_/Ls`!6}STZX*z9lV}' );
define( 'AUTH_SALT',        '(Of3p7UG[n]8.~OH4E`3RTGrS7bj~!0Wdjz|eYKZ[^}r3&Z`}pQ X=-}`1HRf;6-' );
define( 'SECURE_AUTH_SALT', '(dt<a ^5CO}{<H`XRM9cenuq~Pybn8V=3,PyRs>>b8dr3!,k~E9{1Ym$L~9N#F:c' );
define( 'LOGGED_IN_SALT',   ']& !f<=_s._i,~`4k=B%u_e)|!g}kLR5|YO`Bl63DoQy2:t~7f V,VcF>,=6s |h' );
define( 'NONCE_SALT',       '!J)x/,bDwjEqiW m[iFIda)wrCs&eU5t&_G:Zi$+s|ztKoXW{H3Z([8Z72wP%Vbk' );

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
