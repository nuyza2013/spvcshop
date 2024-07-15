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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_spvcshop' );

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
define( 'AUTH_KEY',         'qRle.F08IBhK!4f/BZs&0pL{Eq r17SEl/G|6J|d0A:O&(j=<J$>oStmqXR[*k}*' );
define( 'SECURE_AUTH_KEY',  '@hYr_w^/FQ(1AV3b~mb[wAi+UcYDAG(p88VqHvAm@2<k_h1WKHyFy$BurxDTQ>$z' );
define( 'LOGGED_IN_KEY',    'W9cJVrOHz<:hx[_Y=/Cu<YE`z TAR9N2zXz3&^N-zq6b tR`h1&%N{9}sv,`?a9K' );
define( 'NONCE_KEY',        'G(h%6GjUGGBi`Y}T<MwB$N}wF2a`*zq)>){ FSe%d)jdVnHJUEw6{YjLR94~QilR' );
define( 'AUTH_SALT',        '~d!pfXPV^wtqnfxEofE)BbM;3n<>6 ]/>6Fm@6=b$#J%L|VZR$gx7$VwMhsJ>Fi%' );
define( 'SECURE_AUTH_SALT', 'xMGq4)B}Ju`W?G$[jc<tkq 4~lsf!.`^UG(vN.K75edF6sOuecJl8t&g$[LH1*M~' );
define( 'LOGGED_IN_SALT',   '-_[k:+J>Su#}(O/{^)N}4;g~o,&pPTHCPdDZ>f81ii=|b1KngLZAwUjFz<c<2Ub ' );
define( 'NONCE_SALT',       '|zDOR95L:7{3p_4.U2{NL7G]=g>]4ZuE|#DMFVzyv5]Z@ZJB&5gvqrMsbBIY]Du>' );

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
