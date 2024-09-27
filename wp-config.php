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
define( 'DB_NAME', 'staging' );

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
define( 'AUTH_KEY',         'I+h1>FI}t8=be*vQm&/CJwx&~N(hb@a4*W>%RF/1kH[:@Ss3?LBD* ?9aj`b{]?a' );
define( 'SECURE_AUTH_KEY',  'ma0t0h4qHP28xjg WKCfj+KD3|[d#`*#2b?|5?[z3 X1nT`Q^qae{u|rhq?UWamq' );
define( 'LOGGED_IN_KEY',    ':5FKY3GLH>vte.H9<>hf2Eu:+^SQKi+NmqEAIDQN`bCcu+Yp@<<akctaYZ_xxJ)B' );
define( 'NONCE_KEY',        'AUBCsT@<=jqyYeMO#aZ5$2<AZlli-}Aifgdp{oYw~p:h|wTP2N<o;d^^7:.?<{y2' );
define( 'AUTH_SALT',        '}S=x_<8<VRevWw@@ 8$,($eyM(wbRAvWbe>x]Q<%DJ3;*J[ii#=(~mRA4XpB-7YT' );
define( 'SECURE_AUTH_SALT', 'Xx?y!mFyOkHu;b#`Qs![P~ twp$(Y(xido:}Jn|o$e(g1hwTTVD$tP[+=|hG}]I@' );
define( 'LOGGED_IN_SALT',   '@^VD?&/xzYS66K~_CG3:q=g$re*4aJHvR>cNbQ5807Z2@TAeoVKrUI?da-vjZH3d' );
define( 'NONCE_SALT',       'jB#x|n(_Z7~IO@<mjru@wRjwGEo&w)8{{H.ei?U9m1wHi[lYpEMB ?R*B2C[3)#}' );

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
