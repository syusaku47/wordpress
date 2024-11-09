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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k}`<u9];{Ss6>Zc0a^g@oj#R;v9?}Y$<!oluv7b;:&Li#<{/E04Nq&H|*-P#nQWt' );
define( 'SECURE_AUTH_KEY',  'WH6#f/34{;reU<u)#EIV$@qz]r& ~T@2?o9KfP<?|R1bcX_bAxf}iTYy71oO)[@2' );
define( 'LOGGED_IN_KEY',    ',*kzF)}o,MDB+~iyRnm*aUg+8R#Gk:N}hCODjypAaP-pf5uTx4c#dW kZ/>u2v!5' );
define( 'NONCE_KEY',        'nGkf7_$Xg5Fd7emg_H6oh*7`z+1?^lWLaT;[m-%]1j%)`[HDsz` qJqPOY1.&MnW' );
define( 'AUTH_SALT',        'U=dc:2@MNhF-g7e19^.+4#V{EjV`::a8RJEo<;EFw/Iw`J$%6 t^7!hsr}7{^t~<' );
define( 'SECURE_AUTH_SALT', 'U1 m,$Na>C#KP6n_RUr@YZl<p ;@PS/Jy<@5I&s=C-eT63{h-e$#CWOtZNoyW-6c' );
define( 'LOGGED_IN_SALT',   'wRJ6P1d%j@2%Wh`M^>?Sc`%i*CV[!e2rKbtm<cx/Gk-X]C?u^pBk@`/;k]Dsc]RA' );
define( 'NONCE_SALT',       '0kX/<,m/UI)Wg`ZLNo_{oHb1Vr>9rqKb I#XTgs[qz$zEJY1k*g+<DHJ#3.p4~aW' );

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
