<?php
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(hBQ++w@*,UuX}dPdcT4e[q^5fI#h$`oDA/*PV,)8xpI|$:2h ;6PTy2yN9Ti_(_' );
define( 'SECURE_AUTH_KEY',  'qd[8t)D LCTHmNo2p80.G~bBt}u{CXZY`XBj!gu|F64C+)m*d84pAw1C`z/D#]zS' );
define( 'LOGGED_IN_KEY',    '4XxZRKF$kz,>YaY_)haY9jNr,81;qN=3V~{Fkc.)e#SCd%lt=UZTEj4<gx>E0UbD' );
define( 'NONCE_KEY',        '+MK6cuJ^$9V>WNyBDGSdRT4QV*DhbKEEjaK;}!qrOcyh^ tS:sY-/%Q<ntAg-<H$' );
define( 'AUTH_SALT',        ',M@VK7@In/X:h7r;WmDJ}dsLP8leqbbWdK_%(ciLw:(3g E]~Y4GHqn?QAU*FBeS' );
define( 'SECURE_AUTH_SALT', 'xV.Pxmf`wp|isRY!)`c9^{OWBHG,C)`4]C*V&[*Ih##KL2Lw^KlU&mBDxo(=0<L!' );
define( 'LOGGED_IN_SALT',   'oG*<4)D(8vmkuOfsS2@XQgh.H!Q;47gM~b5XS,3AM}4A);N{%BSakS.%+BJKD,0a' );
define( 'NONCE_SALT',       '<~y?gr7ZM/;~~@gQR-Hh[v)Vf[O8R,UMOA6=TNScV K!%S*4>RYiFv~4s,]dW(Qh' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
