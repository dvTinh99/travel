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
define( 'DB_NAME', 'travel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '8vVP*^.d@z-y5Fe0N8k5BE1R8!m=Ym=fcOah|?MZzEwxp] 9s^/-?Nr6bP&8Lpxs' );
define( 'SECURE_AUTH_KEY',  '62h/3_7c{890Hfgk>j$x7NFh +JAOGCDm{c(W{N(J}AFgddwToG!dN|J!o3vm0Fx' );
define( 'LOGGED_IN_KEY',    '+$zE=r?KM%uiBJ3{`TuL?1eR{$a}%/iYg[n_~|b!)Fe.`}#_}MHQQT?l-,._h?Ol' );
define( 'NONCE_KEY',        '7i;f:]>yr1HIhhTi?hvarCM69L1RJ#b{hj4[x!`d~n(oah7x/S8%w[6ae[Q__<OB' );
define( 'AUTH_SALT',        '(_IG7:3 rnY:+wL3>E}an(LBg4,`HHXHl~D73h6#.*rse{4^6I`HHGY=se8`rU<i' );
define( 'SECURE_AUTH_SALT', '~tok.&c)0&v3|:L~T$CQ48z?n{Xeg$S`>)GsmL;EsK6+xKrW=0`1iPvf;WuIP)ig' );
define( 'LOGGED_IN_SALT',   'E>Gi15M=AucjfHu)~F[fBKl+HP~U0F7|V];ab^4ZM=2S!O=n[iCe3g2@m)kdM,2!' );
define( 'NONCE_SALT',       's-0uo0p>nCR;Hani0sWd`{0/AI-dI27wf?&KF_;IKG{/0b/4~#Wk-i_8IR(vt_AZ' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
