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
define( 'DB_NAME', 'data' );

/** MySQL database username */
define( 'DB_USER', 'data' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shubham123' );

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
define( 'AUTH_KEY',         'v;vL:iMo|/WT/-r7ipk=K0KvJbs}Cf)JB)T7VNMDB$K89q>Wa$^5taJ%?OXw9b[y' );
define( 'SECURE_AUTH_KEY',  'ruEYZShX+X/*RHN]w%Yv@XE2P7<bhOiQ.?|zfPzW9SQ!9b|Xt~oES<WK}zj/W)yF' );
define( 'LOGGED_IN_KEY',    'H{r]$RsnjIMRZl1iR~OZ[#ON<7_y(njMr)Od4ZKq%>_I<2Ffr8+9=L>n22X]iu]>' );
define( 'NONCE_KEY',        'bKY&tx9,XzEQs:c18gXuTUg%8PY2aHB6?u|J~i%7v}I`b+0|QAp[[GN)exG*283G' );
define( 'AUTH_SALT',        'qr`;LEwS$tP(jzHE/Q@tLt|K`3C1=L<0.>Ql%})YxB8=>yqLmA9`X];@nR8>L]Zy' );
define( 'SECURE_AUTH_SALT', 'a7L/JNW02t0(zZMM.I;YucElT{ZFAJC*w7&zdj:_Np5)[}I*yA| 7Jdwe+$Hq,Fo' );
define( 'LOGGED_IN_SALT',   'AC~pd(V$S/A]D!zHpr%s7bV`mT [ufC](<)=9>xkN,7S?oy.gYKNr3H5<.,+!b$#' );
define( 'NONCE_SALT',       '>F2y)Ny4lY{`UVfL+W]Gd,XX{vgN3:Hnd}AH]V;$t<uQS}lo#d-fh|,?bOs;[|MB' );

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
