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
define( 'DB_NAME', 'sunset' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'H:Jk)AJ=Qr=4)r<gd6*=kr,OFy[5>U%{P[Ro[M-D!39Vf=}Xt-(f5!cS3j8n@o@E' );
define( 'SECURE_AUTH_KEY',  'O!k4qr(`McWHa.&z8GbhqK,xk2+8h[E#&k*D@{wM(v]/i0`t:9B5W<^!QS?8?Sur' );
define( 'LOGGED_IN_KEY',    ' g/uL4:Hdlrp7uSceF{uQNrtMcPk<I],+Ve3Kod{zWoIWV]3Eq(_y#A<-t[BN^85' );
define( 'NONCE_KEY',        'WU7$R~*(mNsy1YPqpAN7bgBY}87.{Hl7ZY)R@Q_g[HQ3vItcvb@P*{GqkF+y;q X' );
define( 'AUTH_SALT',        'w`s^O~Q&{sE*.FG=F{OIMGk~^#EHvL++sq[1QWt}s@Q@jj+OWpmpU3(P:|AMI|1r' );
define( 'SECURE_AUTH_SALT', 'S4>o^og7c3JYm]n;P1@S Ud>,Je$/,Wf=~mms3!xg Sz(a#sZDW(e0ZG&2^ $*Ui' );
define( 'LOGGED_IN_SALT',   '@hX_jw~D78<pK[ PcD%Td3n)y-h<Hb-`GhNS={lcIpzA*XP2gj2P:M !b8fjsC,6' );
define( 'NONCE_SALT',       'vxxI=mv#|()ZuJJv C}jb2$IgU+UUq]@RP2~KSru7Gm;~DG9!)cBlbHQm2wr$QEE' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sun';

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
