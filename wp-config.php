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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '2loB:YHJ(1::xtR:2@PalR!s_Lnea)PvzqLD*UAgUS?{eG;|I-A!nnWg~Vi2/N%X' );
define( 'SECURE_AUTH_KEY',   'ID ,gQ%ISJy[&~-v:n) ;j``{Axz%8f?}aXeQY<!1^B0N:5$n{69@J!9/nRkx0Tj' );
define( 'LOGGED_IN_KEY',     'o9AM+^ s<M:QAdh.!^?3jne4W[<~5VV@b;MhL3pDffv{V>ol!,cAZK(ZmC^51`t~' );
define( 'NONCE_KEY',         '1WE#|@baU$Xu&TL(g0e?6W1{4gsi}ui{+6tjtUmaTf`a,l-XkA05q0dj?5De6|UC' );
define( 'AUTH_SALT',         '}fQ]J=Sdt18fZd7~60CVucg)3**3S N!2D2d<e5~Oi:QI)=Cx6F28Sn}&|OX0~E&' );
define( 'SECURE_AUTH_SALT',  '9Z~%0o|28Vpsn#3+K8[r)d3~Al/>F#Hm<~h#lEcT}qNDtHt?q?^1MR=v-#<5gvC[' );
define( 'LOGGED_IN_SALT',    'IAgmn1<`S()?Xo!!vP!UWo}:o{^9J5kOZI/i-ibUu,f_9l@CC#M2Oo7}Xc~WL]?A' );
define( 'NONCE_SALT',        '_6%YN*oQiBt(:DN~8pE,bXDtDuMw2f&b!]C5q8apYbMf@Eh%cX=;qbqK7MB{6(N6' );
define( 'WP_CACHE_KEY_SALT', 'x2ix<?}Vbo7zo1KY9`oP-}alJF}+Y2u_Z{pon#C_n.vSKJYQ+o7H7:8v5W+*Usmq' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
