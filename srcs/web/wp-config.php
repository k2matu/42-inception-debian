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
define( 'AUTH_KEY',          'l}Y%Q>;eZY^WC+`b`ZJQkI@b7rHzA!r#aD;$1!D*/)5^L{6nc:T3D> hp7y9!8z4' );
define( 'SECURE_AUTH_KEY',   '^{H+-P.24z@V7PB1fYZxfxwc]MF0?5rkJc@h9Vzi)Tcy`qb5eH3v2Hz|(lR?o15A' );
define( 'LOGGED_IN_KEY',     'UP7Hm^2%a360c,6b7IRYM8`l;2]}bdpU-!oS3H0RzYGSWBw(-7AY09Rbt<-_ W@k' );
define( 'NONCE_KEY',         'ex88/@p~5)(5U9|yWGqzYNj3E,2A~!hK.UwDfrlMET96d2``m ,a/wpZN^X.S18|' );
define( 'AUTH_SALT',         'z{:yr<3Hg=]b]pOvJ+/$GAiVN/@Z]w(*( e>?a7.UqNrEF?l&)(^Og7*i-[AMN):' );
define( 'SECURE_AUTH_SALT',  'oB[ ys`>-Yf]}8@PwoE{TTA>`ee~`R]>TUSt;xbNn.OKeK4H +?+={hlj}qsA_=P' );
define( 'LOGGED_IN_SALT',    'eb<t[roGrabL=Sf=/JsP(ElL{[bOO!Be1xz]|iWpX;@DN#.>LB_8Cy Tj8i!~}_`' );
define( 'NONCE_SALT',        'w>urV/5ltz4!@!Vh1rje`}SjF]K-p(l|?WVQIin$(zVEm<DA1EpA>(iPP+Y)*K*d' );
define( 'WP_CACHE_KEY_SALT', 'X#Y{WDu[EC{ha]V=B=wlei1;4UBTnv:s(]P[.8XJqOq}*~V+A/S^*SRgHUzAO&#:' );


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
