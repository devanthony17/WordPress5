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
define( 'DB_NAME', 'lorut' );

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
define( 'AUTH_KEY',         '^[{;u;/a]c<R$(q~*a*(CE;mM->]cx!ji9iLc]Kn!e`YV&TPQgO.hT.VvTcg+:9f' );
define( 'SECURE_AUTH_KEY',  'wm2:[~_x$:rRl8%R.:NGMfsr[+gidiZcx[P*3((o9PzYJ~sim/qjYT(-BG)s|aA+' );
define( 'LOGGED_IN_KEY',    'Yja$_dm!W]trOxX7cL3w{gD8r~_auut$ns<E9b|DbaE8`Fg[d]K`q+rm]ZP.2%y]' );
define( 'NONCE_KEY',        '/rz;dz2Q<6@iO={*386.7mW%_#hN^Jnr?wX}3:DzYb1tpt6)Uh*QTAnGK8xcmv_E' );
define( 'AUTH_SALT',        'TpzG;dr-2n{V,_v,@lT@75xipBPON9m/GxcMVF$L!HtGx27uvM@7-(CFj&)Pqrh2' );
define( 'SECURE_AUTH_SALT', 'd#A[x,h_~i|B#r?>)w#/=7_(mMP:f@V/^+DIU_XTMu:vM7y]AB}=&UWLHZ,u}rM ' );
define( 'LOGGED_IN_SALT',   '$r_83^,X/(@O3JB+E8`d 4.%%FNFpv:mH5u_MC+8hTClA ?f}OP2J^*Ce+Azzy:$' );
define( 'NONCE_SALT',       '(,#gQ%g9I>BfOvtN}eF5((gJK[>i,idM/_4~(>ENyQwVa#!k%Spk[YTq!J[z(Pt:' );

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
