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
define( 'DB_NAME', 'aldo' );

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
define( 'AUTH_KEY',         'qEq3-6?`1rXTXeTR>Z&Iw6O[Sn,jhe`g`GAUkIZ>f@Cl&aKGl>rFF0jDASo83=;@' );
define( 'SECURE_AUTH_KEY',  'LG].mrP.y:ut7_]zV^G3bhp>r4V8t?P@LjRxyooMWu2)pAsQ+6L(2}VY{{C,P]=K' );
define( 'LOGGED_IN_KEY',    'te={<m|X8Eg%[x6)]]c)5x6S)O$@Rgy$tY U9W;koWBD`ESaBn$}WGj$}L4rz*pG' );
define( 'NONCE_KEY',        'ah?&SNKlVy/UZc}6,yU _~DALAxD;#{XyA|ieQ`!V_`S9d.N6E~+)s+E31)c!p^I' );
define( 'AUTH_SALT',        '@OM_x=[}.PGO2XjOiMRF%>f9G0|3U}^R/(&H1G&$+~[>GU?>:0=RyZ3&eocODhaI' );
define( 'SECURE_AUTH_SALT', 'Jb{|~/Kz*_iv.F&Aj)P9?jgI 2I<wV,W_-zhT%R=Jp)PDxDDJ D4 rY2^:g?B#G/' );
define( 'LOGGED_IN_SALT',   'n2eXP7wT-(gY8^Cy7d 7]-IAFcIcFw@G!H1A_)w#Z~g_b1!1$4)W_c6.>PHM2:in' );
define( 'NONCE_SALT',       '%<?$*jqXA+Zo9vHig&SDR(T.HYL*jh{jV=36t]bBARyE%Z&=QdnpTbUNcA<:+!=;' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

