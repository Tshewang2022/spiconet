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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database.ecommerce.internal' );

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
define( 'AUTH_KEY',         '$# z<9tzl7bV`^P,NC[r/#)y7U1tN{3K/5w~_i/1P%&V^VnkZRni|BZ+3B!Cn>3U' );
define( 'SECURE_AUTH_KEY',  ')DW5wItWT.KTWP8$pz.u@k(!zEgG5hpj(/7N>n!BGxk4AJ*w5le&Ft$/+9I.{G+E' );
define( 'LOGGED_IN_KEY',    '~pA)?b2{HH8Y~o>ia$_/.#So  a6KmF W/EqAkZB4wQ%6]<(^ZUR%RkD4KB{i&?O' );
define( 'NONCE_KEY',        'tWm4&}Ig$2v#9EtZ?Bz,9oF[@hG}iMY<3J+.S43xw+/s3p&pFTX/8gTd`STQdM|6' );
define( 'AUTH_SALT',        'xSg< W98>4kG:} FZx t.d(N<bU6 vTo4}{!8}PL1;?NDbi%l[d3y@?G>?]@LjaV' );
define( 'SECURE_AUTH_SALT', '5v7t?!j|^.&0z0sV.5?9x?_K%P`M:R.lR`e=dijTloN&2DqH$`Zw5hdH;i&|n 9W' );
define( 'LOGGED_IN_SALT',   'pXkk9KuzR2rZTyr6Aq+8.Yu3)v4x/[?p?L?[7T*H6@n ,6.FT(zH(:=a8a@n2T7H' );
define( 'NONCE_SALT',       'h!MA.qXbqu%#&KQzWInLX~!TNa23{Qe#gFv`5`GS>VVE>uaRXh9Kd?`s9)p%S|$6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecom_';

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
