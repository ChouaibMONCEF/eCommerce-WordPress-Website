<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'supreme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|T N3V%L7~0oXjfM+LYg|To$)[{=&3(,w|<=r+VY&m{8#B4=S#+PA@G7DwQ3i,(?' );
define( 'SECURE_AUTH_KEY',  'gh-!ST7.,D{WCakMm^8ZN-@xiSZk@D]L8cXDY,UpA#b:`x~bP_3DUBN!y|k0vu41' );
define( 'LOGGED_IN_KEY',    'ndK{d;9^F=ui#/45V *;Q_2I7wpQ4JH/ROBtI[)We0Rtrk2Z<47ap*`+rI[ojkPB' );
define( 'NONCE_KEY',        'B^g|V^,V<G;A=)84W0gh3$[GSi}s7;B:<|_(+y4o%8MTaYwd>!?g1*QJq(M7xA|p' );
define( 'AUTH_SALT',        ',vv-@LC*#zX&yYRrHJ^R;~w()Ua*MAjczFi[.:n>e-YQ8sk{IXQkCOiuQUl5H#+6' );
define( 'SECURE_AUTH_SALT', 'SdkmqB4Z]OiF;e@?uj(m|rYGp}=s:ps}DWZM#JctxSg9p4F(be]F,Y:D7<QK$TRB' );
define( 'LOGGED_IN_SALT',   'Jq#_aqui=tr{7&5vFz&?2jOSXDJeB7{q7qOJAKFgI/]Ni@0~B31}bZ&eCz!.hC:+' );
define( 'NONCE_SALT',       '5jV4lD:-^5,5kn%SL9b+lvodn16n;-=xpoGe5fLUB^RN^K%dFB}{:B}qN~%Fl=fQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/supreme/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
