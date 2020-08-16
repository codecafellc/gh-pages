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
define( 'DB_NAME', 'ccwp_db' );

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
define( 'AUTH_KEY',         'q7]I.y-}mSo0oxH9:Xb4} s;;![W3RdbEtw4^tRg;8vt6cc)VGEHQk?f]M1t](63' );
define( 'SECURE_AUTH_KEY',  '~]3: %Fxl,jiwJSj^6fe<Tv[j[:n|wj&_q5_TZCm5J>,+@SpNaV@6L_]<>U,i8Y|' );
define( 'LOGGED_IN_KEY',    'eJq$;qVYOBwVd]rcE]pQ0NPX2$M#Zj$d7rB+,B&[Q8Y21Zj^TirHzQpVSL= &:Lp' );
define( 'NONCE_KEY',        'suxdE=N/Ja?aDnq@zE>g*A>%iL#P]}9 t#D*<;~f./D65Qkqmth&e/Hz/gi+lI1C' );
define( 'AUTH_SALT',        '#qRc5.4`Pu&Pr89nc%_neO%MvL)^8FpGPufBCs[#8i#^Xz)F}un|Wh(ex)en !m(' );
define( 'SECURE_AUTH_SALT', 'K]k8]q`]]6Cf;FJEJ(fCC[7`,V$H!@V<xXl@/|3HswVu^CP{`)]aUfBOL8EM/HC<' );
define( 'LOGGED_IN_SALT',   'tZDfSPd-96l9OAcBuGQ#Mwnx m1Mv+N {2i)DLf}=JwuB[>AFY?T#~bv2YXZV!Y1' );
define( 'NONCE_SALT',       '&nE?6Ou1h;pzF+;`VyAF(#G>Ws<IeK)r%(XgL96wThuBppjPNSYCa$T 077VvQ1S' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
