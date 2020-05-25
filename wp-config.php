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
define( 'DB_NAME', 'id13389106_db' );

/** MySQL database username */
define( 'DB_USER', 'id13389106_dbname' );

/** MySQL database password */
define( 'DB_PASSWORD', '$fNphWY\/T&+4y7k' );

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
define( 'AUTH_KEY',         '82Nh)JGQ):OB^0tIfPqT=CT?QYJOfxP~XlMl9.JH::+Ji?EJ6?%;|>CT=jdr2BKc' );
define( 'SECURE_AUTH_KEY',  'qo.n~%#)>wBK.-H8|TH$nblkg8PQ@6k(i(;fkLMoy#Aa$7o%F)76W?cJFWoS!n$X' );
define( 'LOGGED_IN_KEY',    '$g[@Yl./B Ti@69D8}ONavag)kF9.:5a7?%+Q21P%6DPm~XCa@efK6o/!|DE{zAD' );
define( 'NONCE_KEY',        'o5v[:&O9}1SP~eS4;psz/k{>elN:QG!)8,XOVT2?&.QrZ#<Tu;b9zW`~qB}W rtK' );
define( 'AUTH_SALT',        'OH=]&6O`hD1 Qedq]p(1/6|]<>?m*#eo*#kG;{(Ol_UZe<%puYX0?mURItTXS:CK' );
define( 'SECURE_AUTH_SALT', 'L+kV%^^t`^:v7/5%5gREXF_ilpGx=M~{cM$yKo03x>QH=:EKgm.df`(|0o+wYd|Q' );
define( 'LOGGED_IN_SALT',   'NX,b:F$I%OQWzK%)*}NBc7GR#G{jkBo[D=-SHPo2DY4u2MD`Qz!s3#>n<CPedL$i' );
define( 'NONCE_SALT',       '8N/L!y;,RS(Zx?k~]JQpc;/GU%l{u!ejC[<|$8;]+~DIWZIw<24Fv%LBLy*G|v*)' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
