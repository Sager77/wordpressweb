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
define( 'DB_NAME', 'websit' );

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
define( 'AUTH_KEY',         '0lP2F7u#8+Wh:K9!tkx&d(Zm(!6:IS*lwkCZ6jt<9e+GBOX?I_^.DEn=~X}Q_ pD' );
define( 'SECURE_AUTH_KEY',  'iE!?%3@3(!u?-M9&uR92V@NRt^5bJ92S%jJ8+c:VYZO`;U(KP1P!EM<Srbf{{#Q+' );
define( 'LOGGED_IN_KEY',    'y>!0dwyqVF`114O&{YC`S}u(1F*mh4}k#QJScAa*1<dkgs3k{>kto8Ml<v&pIl>b' );
define( 'NONCE_KEY',        '#I&yu#u_-UZ+{=@yGB$StiOAt<XnK%zR=^xRuKz2=.-w;Yk]pjKt&rfaP08q4&(i' );
define( 'AUTH_SALT',        'D<[6S)d~p:+K|x}--VmiI*^4;~tzp_==W^Q/MGnFezTCW+kS):c.,`<aMCE}$Qh>' );
define( 'SECURE_AUTH_SALT', '?+@)PEC(mPpm2Y: &*tylB?J{$Q[USNt*C_|o{f:/!}YKcm*3(zg!Vr);.jy ,45' );
define( 'LOGGED_IN_SALT',   'vu:,DvF]>71N}1:D1/.AR5w+.M@/f(*,LP}{l6n~V6+p@ieL2ob}O,xomdBb^FS;' );
define( 'NONCE_SALT',       ']>[9t=_1#D[3Fz>q K|SHw(wv;#7n]ar3iGxkha}B@Or2#$I#/c^3mz}M@&oy468' );

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
