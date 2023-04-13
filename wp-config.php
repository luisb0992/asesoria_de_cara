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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'asesoria_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'L#|zUz&ZO4v0ps_H0fk`TPCo3`&dNA$q:b}27-p10;$D<h0U)6Z37gI-9>.VuI&&' );
define( 'SECURE_AUTH_KEY',  'V749{wN~Mfyh3Vhn]LU#=BIE$2;wr%>Jx-Rdi|D5-q`jk-RTZ;4zdo-ipArw7|*,' );
define( 'LOGGED_IN_KEY',    '46,NGKip8)m>2|,^]@`|j8s3<Y=rhm>rE~k~odw=T{aa8ec0lPGDB_:C+9?D@]+=' );
define( 'NONCE_KEY',        '>%<-$Yibr%9hq]^:_cXCb<L[o.*bR~&;+(h!>Kt@nY2.ZsrSf[.Jmcg#8[B N|Y`' );
define( 'AUTH_SALT',        '-FFOu_^}Pi;4wT8&@FZeyW7D=.J]]6|:87=(0BU/+tHv$dHe}w8Z.XM*}<7M?O}Y' );
define( 'SECURE_AUTH_SALT', 'qR$1-y,vDOnh,;;z.]lGL<CeRvc0Bt)(U?~4;fX.1:EOB(%&(ndk$QyHdZ>qn[N]' );
define( 'LOGGED_IN_SALT',   '+/%VSB0Ps]kF3Ayo,<ixqZ&O*a&6iT;Bv>trP>Ju`iU.c8Mb,$-6&`rj{E?}C2XK' );
define( 'NONCE_SALT',       ';*cQaFIHrHl+|D}1E.Ufu6:Kpxm?Ooz3 MXU[j`rv;|]@v}~Iok(7%eqjLLuj=yY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ase_';

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
