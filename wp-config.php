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
define( 'DB_NAME', 'sliderdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '55zv ^t!F6$]Ow/1RK_R0FYbLcYlt3p~0%YAVB<OLCxW.XvER&^a3Ywq(J-m.S-T' );
define( 'SECURE_AUTH_KEY',  'w|yV@)0@#UAnV#X~./m:dh/%U8J;!$~/RXo(DT$Sc&[sn*}]z- hwttx1$zrnxWh' );
define( 'LOGGED_IN_KEY',    'WLsDEX2U|/,>*V<Z$E`jN6A/LT?Z;siA(}gI3L?8-gh.fsm|N086-|gCh@d36`FW' );
define( 'NONCE_KEY',        'pi[e1YBm3-$zXQf7?{_kvK2p26ozjZ}LbM!G^#|,:.hAn,P//*`a+<}#9V8b0`v8' );
define( 'AUTH_SALT',        '5OYWsk(gS6S*KGf7`JcHLd=6#0I!*OLJa:..O)1^*1<WVuSH9teD1bqf_>j4TE$U' );
define( 'SECURE_AUTH_SALT', '8!YuuC.a~_d{ZA:k2gh`AIMRjt5h!>&Le~`K1r;/d-4[&ZiwN))cw:8rY)nrPX=%' );
define( 'LOGGED_IN_SALT',   '%V+|mO=z?&^78ATtO#D~`ymld<_zLLnlWj$$- pkOPDs^hF:V%Rve^wTN<NyV~6x' );
define( 'NONCE_SALT',       'x*m9=Lf3`Y:/x#*HwF|)Ok7X-gpC20b86_R<.^KD>Z}YoiYsU`,)8UE|R(X-%9yH' );

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
