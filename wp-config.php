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
define( 'DB_NAME', 'mcprodutos' );

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
define( 'AUTH_KEY',         '#wl7k/#J6Mcki(_R?.j)7]Y j|l1 Jio:2;}2bP6U>SMzi0/|k9ZR}F!6l&6THee' );
define( 'SECURE_AUTH_KEY',  ',^1q~TY+r0E(@#Ele%e!TY8TM:h%=_dNRQ#CgwPL1qZp4|h!s-AaHivKVvU{d~XX' );
define( 'LOGGED_IN_KEY',    '$8OWE+to6|re;*1vi=-#t0TiZ?.GG=JnHRqFtq3N4/-?A2r~P>)yi#mjSnabi~]*' );
define( 'NONCE_KEY',        '`<^J/b6N`{&3qa,B 2cX[l2ei|WqycTteC*:n~#$*T@fsco+TArY5L6O+1kD3K%M' );
define( 'AUTH_SALT',        '<)H$@`8yBR=)n4?g@,}%Ze0Lu<Ar3d8chMd:]sgqLMLN5h.S:^,T/`)44Iov3(PY' );
define( 'SECURE_AUTH_SALT', '_dFgOA+{,7w1W4IFD{IjerT9X!lwn#XtQT=A=-^cl$.kGT_PkS/Wd-QZcl*O44Mc' );
define( 'LOGGED_IN_SALT',   '%K:)p.ZYV2F`/_wK=81ibhMR5Mhq)Rqa4gd=D5Zh.XhV8lcT6%VI[:1+kbZnL$Om' );
define( 'NONCE_SALT',       '.qB5~pAE0LX9o]K<|oRl?qK><czKl`XT+q{L84I?]HhDm1hfxhz6^z{lsmac]0}(' );

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
$table_prefix = 'wp_mc_';

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
