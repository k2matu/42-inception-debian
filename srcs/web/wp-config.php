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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'f#<Y.Rys-6pqke(IZillH(Qv!^h>aU&7|2dMmk5<_(Pbw(.]1_,VhRO1vqn#i1`2' );
define( 'SECURE_AUTH_KEY',   'AP_+om_R4[$@9lhRX+5[tK^Mn+?6:he?*n|-s_.8(w{d^Az)k&,N<<jevpW|-ba4' );
define( 'LOGGED_IN_KEY',     '&J#hN`KeD$J=-7-y7UU_VZfEMSY?yt;~qS0f1|gs<?iD8GCFLq|w;o&,hfZ9STh>' );
define( 'NONCE_KEY',         'W B34/?-P5^m$ui-t-Kb U^XcANq^m-5$UM_z$9J_8N2)XtwTM0/7isHHcTn<ikX' );
define( 'AUTH_SALT',         '=d+=V$;pzA!#G|mD_I+2E}=K>oq!G.bvi!Tj;DlVP?%ks::*}eR|Wqi~Dq)t:)t|' );
define( 'SECURE_AUTH_SALT',  'T):lOk)Uo* E_3_9,l_+xVOo8P?Cude ro&shA6_iD;M14KJaXj6Zti*!{)DHLy~' );
define( 'LOGGED_IN_SALT',    '}GrpM-_>_IkQhV Q%;wz. D*G->$J*_Y/:!0C;}?g5HPZ4}X k;f2IQ~nAE$Tn:G' );
define( 'NONCE_SALT',        '+hTX[*lcPaR2xVt-w7o/RiC=!7=U)St|OQKGfJ1j^R~wqrp1n3c&56`j:?H[Bnbh' );
define( 'WP_CACHE_KEY_SALT', 'gAiIbUi(il&g+G,&Si}/=DrFq7pA*MTM &OPuYiz}g/i[=yiEQDY(j[*gtCylDk5' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
