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
define( 'DB_NAME', 'erasmus' );

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
define( 'AUTH_KEY',         'aTfKR5 |eHK83k]}ExkNsk/r15?|(RL1&>c*LT>s:>?8m-H<#WI4!Qw3IT9=yV4z' );
define( 'SECURE_AUTH_KEY',  '~E=XJ(:ZzH8tT^:PM0?jyn*^,vSC4TKW0ro[a?:&0XLK:@1=nhn}zK<zkMf:bshf' );
define( 'LOGGED_IN_KEY',    '(u_Lrx#vT<RBYVkfG#W3v`/I[U&!+9cPb=SWk~Ra~zyR7eB8LMw;)`jU@F)S,(}M' );
define( 'NONCE_KEY',        '~0W4M;{J!1}`OQ=iR.J|bId=yau:i}+4pws-Rd#1[I=4s]w0x^tz|EM}[rerRX83' );
define( 'AUTH_SALT',        'A(b}_6isY`gFM{`3=zs$nsV%>Su?1ZdSvS5mSkiIP2t)KXy4u,ddFKTNuUvNx{O`' );
define( 'SECURE_AUTH_SALT', 'wVt4oEp>YC)Bu~V|KT{qHHmlIwSEk!~!#)*35mX|P82ReP4A!&A`n-|`a^w.?)PO' );
define( 'LOGGED_IN_SALT',   'fg*k9jG*|^ A7B?-T1iZ@=(Q_Ctd3;$H_B9e/4X(6L`OMocemN;%v~5!R:+v5_o`' );
define( 'NONCE_SALT',       'Z,4q(#d|CbrfhW``;C==I:4~g7E(l?WAQZvfmuF #BV<OJCvp 9m3W$!+{cauyA/' );

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
