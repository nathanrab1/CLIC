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
define( 'AUTH_KEY',          '(%MiAb0D7Uf(xeH<JQe]9ceIH)[H1E|-^&+S7Bo)[>LlSi`Z]nVB8e7^75Hm/QZU' );
define( 'SECURE_AUTH_KEY',   '?Fj5r/s{DZLiHLlcU22/ai-pIz9#RXN%YX}ot6[kea[@n*9,:rBZVp<GA^5Vlw3i' );
define( 'LOGGED_IN_KEY',     'pK=mx*^Mz_&NNwp %m8RLZ>z0:{Zl.@6W!eGRGXC@RL)~YP5&z[.E;)R=qf#<-N2' );
define( 'NONCE_KEY',         'g}svp.2-jc~HgK6ujq4sNt#:J1%)(0yG]mQ=!Tq%6(cI]H,)YNrG.:w)Gu4wb,tZ' );
define( 'AUTH_SALT',         'YEAaZApf5L`BIC=&-*f{a]_JqlB[!ZO-,]K~wy=*dS-VT|bYZ|jBT~,o[^@LeUNO' );
define( 'SECURE_AUTH_SALT',  'C[}paN%aVq5[&%s4F{1~IsiyEp@E3vxh >Bo;Z&_EURC,8mnim0XVR^saQqF2A;*' );
define( 'LOGGED_IN_SALT',    ')-dBR{KZ4Mn7Z{%MbFw$5!IZ.!N7cjVpkPk>=r.q!mcC=kV-2qup;S)]O -XAUwb' );
define( 'NONCE_SALT',        '*ydFtg+]`7fBNBjcv_XQU>OJc5+AX1zQXM50eFE6=,%cCRx@W?;}d!fYq?x,.uT~' );
define( 'WP_CACHE_KEY_SALT', 'nR]@dq_0u*B T+zzN)@jJ=<oT-cb}D9R;m/:~T&X?=Y1H7pe.!<g&5juf[q~+Zw=' );


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
