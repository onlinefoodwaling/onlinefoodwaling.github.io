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
define( 'DB_NAME', 'has' );

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
define( 'AUTH_KEY',         'Q3@+U0CRz:]mE~*Sz]YSCsZ>74O52NGvL+CQhSVEFvn et/~)SMtNHUWNfS7|/dJ' );
define( 'SECURE_AUTH_KEY',  '6,wq{EuXKmmE)9Tj1q|l&qQ(y#q/`#]T:cU+#t)ACSu~4_VI,R>an+ v>^g}>TJs' );
define( 'LOGGED_IN_KEY',    '{.a8Eu,ee4m/7/$w>[JbQ vVN(X*~}~xo0ZbPy}j8Z}+?4{.W:WsmGEa7ib3JUjX' );
define( 'NONCE_KEY',        '}5~?CA^HYwcVi+BJ)5-+~^x?_fM![bI?[bZb4`m1Nlid41<uTua)%(^P6Ui_6hc>' );
define( 'AUTH_SALT',        '9k#qh%qimyigEAH{oiFn3EjuR[6ARs/p|VX_;kA4yVP.$@yum!-:WdL5qwJm3[= ' );
define( 'SECURE_AUTH_SALT', 'zXRK*B=B4{%->tIZ]CwS{1~v7~&V[YTJ(EI4F}2}Y{k;o6:9K6EPP7JGMu^K4V`=' );
define( 'LOGGED_IN_SALT',   '%3Dw8efRDPhP,w7|s4<fR B<=r*fZJ*O_V%}p9|L_}d(pEF`jvic-5Jm4J :s_CG' );
define( 'NONCE_SALT',       '0_-(y89]#f=`xv~)huE1(Y3x<%cx/)iFbjR^_8ucZB9(%j|b {epclmh~x599(B^' );

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
