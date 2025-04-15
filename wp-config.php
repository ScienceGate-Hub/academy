<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sg_academy' );

/** Database username */
define( 'DB_USER', 'sg_academy' );

/** Database password */
define( 'DB_PASSWORD', '16121998' );

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
define( 'AUTH_KEY',         'u,rNEMGy|({}OG)qw`.-$K^f/habvNf(CRR#%O}8hv<w Xjp.cr]%pO:xFwL>svk' );
define( 'SECURE_AUTH_KEY',  '-d4 [&iV8}`#Clb*[SjA;B-;Gi#yQy^*+:i=;w5v3+_U>(>1G|)|s,$Jn$hP{r~?' );
define( 'LOGGED_IN_KEY',    'Z,?Qa^$b&<?oS@78KyQCdu:B[$[b(?x?lz)Np;j9wQ;Pa0NSBqH(DLNzf3yL.fV{' );
define( 'NONCE_KEY',        '-rk5(g 34c6V-)87$f(RYlKy61`6#:))Sp6d%U=?qwQyM}`=Tar#hTb9bx4Zq@{+' );
define( 'AUTH_SALT',        '!(k<EMG$18#Kz/1w/v VIXrQutF`uUaE[[&x2_Yz[N2JzP7SW8j}b~W%B]l%.tFg' );
define( 'SECURE_AUTH_SALT', '3=TeXH/=psiXEu37[)xM21#NB[R,K;t]hX>(RF;B&_QvdZ~Hph8]pNnh2PgrNQ5<' );
define( 'LOGGED_IN_SALT',   'NGMAPe5E+fC^@j1=36Jcdpam=E[z!#)Xd#aOZn#5g|,im(SR:jm>gQK.|m|F1~:V' );
define( 'NONCE_SALT',       ']j+$2#:)I4e](c4p_*.qyly?KLV|].9ntKSf$-N=XP7?=(o5)(%a`h<V-qJP]rRt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
