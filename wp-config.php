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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vinzstore.joki' );

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
define( 'AUTH_KEY',         '2`.2NfHLIIvcuGL/l~W0Q=uGC8{QY<V.FC,m**EwM9o0Fy-y.,UO  OuSSH[9N45' );
define( 'SECURE_AUTH_KEY',  '+A=)>*5J(6iW*DH#hZ]}dz~}XEDyrvyr=lV>AzN&H.)}_u*h #3[)ph0D?f6Ty$j' );
define( 'LOGGED_IN_KEY',    'ddnvkZ*tQOf|$wnvbYu[99S@DB$Yh5{zEYY7<6T2>yo#b5~,q9Od`%SKy&0Xs:Co' );
define( 'NONCE_KEY',        '5Vt8_SEBOclCd?cYGQCYDjtw3_Nhny7LOlkeKaIhG$?S` 6X[]9f3iX6Swtx7mNw' );
define( 'AUTH_SALT',        ';PujQ3`~eKD,25,Lag=J<GCT#3dwn1TMA%)T/ YpK9)*JX qoCI7qKSfISwUd8D%' );
define( 'SECURE_AUTH_SALT', '`IEl_0&~=oD)JP_bwzXX~,?3Cp(VxfAA[4%EOU;EaOJuRx.Am.LZtUcxpVI.;*W%' );
define( 'LOGGED_IN_SALT',   'Z~sp@R:T6U>nNMmc{N.GJo0 >FVKfKUf:|oKPs@TVRSJt1w_7:htCDN;7h,g]N<a' );
define( 'NONCE_SALT',       'Wn5BUQ>ay`}$B+T#olOS/V2~-Si,enUSHU,w62U;^8A>NVrVVEtz][<Z)<oCfSgE' );

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
