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
define( 'DB_NAME', 'number.github.io' );

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
define( 'AUTH_KEY',         'X Jb1`% c@@/E2:8X5,-BzAQzD~sjluxo;K4$@@:Mip~<=(Xb]h3)?hKrBJNY}#x' );
define( 'SECURE_AUTH_KEY',  'F$Y!3#N2I;*,u1vuF1vw#`ez`qQN?Lgbp%V0iv+sxtE)fR+ra3J3M#$K<rxG.ol0' );
define( 'LOGGED_IN_KEY',    '6$9[K2}a|BdsJ*X>?]qEz/5!+CBm>dnzBEY{S*Jc,+%eVA8eV7,*0JgX=%PjVUie' );
define( 'NONCE_KEY',        'Ef{sq#gpU{qc~F/TJf=I=(IMlexcq902VHQwto^o`*Y4nHnpQx^/f5f~;]t#rF0J' );
define( 'AUTH_SALT',        'w#DK&P1j3$!)8`8C%j9?M5:aVb5S/?=)kt|_b1ai?U/v4@~-6oAC?ElHH%F6f5`!' );
define( 'SECURE_AUTH_SALT', '.,^}yhowT:C~r9:Z>t0A(,8fC>>17-x*x2$$?(%ZKlKq,ZDwO7k_T)YZ ECmyXra' );
define( 'LOGGED_IN_SALT',   'V3vfz3dP/Gz%].ip.oH XHl.m#qS*F;G1j1F;ja{9T:2lK)oQLeP97v5N^43UV-G' );
define( 'NONCE_SALT',       '=Cw8C0=n}Q|@j8P$$mHI(n,}:ezk43LP[xtV,F)MywtgrJRMIV+vBDi$]|6+tX_.' );

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
