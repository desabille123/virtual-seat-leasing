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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'virtual' );

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
define( 'AUTH_KEY',         'TPNy0%p_E>CZbu,My%*dCS?W5)4?tBUWBH}e+mMi;3R<bJ?JRvU87Hw6|J2&UQ+Y' );
define( 'SECURE_AUTH_KEY',  'o gk`211zWvc^ZU*S+xMg7 cyt[,PhC*)BLiaqPhZNymsn8hb#Jt*Bn}CR.XdUj(' );
define( 'LOGGED_IN_KEY',    'D1PGpIEQKzulv:_~[tG3rEDZ^}nZo%6( |uCG&*t67s)32.,T xioVLvePP:sQ2G' );
define( 'NONCE_KEY',        '*|]VB%RcHA:rvYc;o/C;K:)q+S^2k9.=wNvG6z%k)Z*E+|ifBW%=#|oR6%4PPG):' );
define( 'AUTH_SALT',        '&a$@MI%Ac]m|P4V5:3- pS]gm0>7R1-`93Z-lyz9JpilA8/%W4(hAN%=Rrh?:JW1' );
define( 'SECURE_AUTH_SALT', 't}C,I*H8 7$wrV VpB)N3p*V_)k>@lxSvI?zys)*+##gJR3wQcx^q3]`N}d$Qo32' );
define( 'LOGGED_IN_SALT',   'm&!RM>^,#u!|4q4,9NjI~-b*+49vSq}V0AHpK^]cf02&:ZzRFnxN#ba64 {<[HF]' );
define( 'NONCE_SALT',       'Ymv)d}X`r>!`J=ma-?m-m;p*32hfd?Ag`{%[[_lq5fXg1xOYn8;ARNl*2ZC^yr+A' );

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
