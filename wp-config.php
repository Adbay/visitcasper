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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'visitcasperwpdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v%!{|caC`n4BW1[H,&u,_dSq5?KN~|!>PE<RhuQO%uVnbt4i,riBwFX_R5Bdi~vj');
define('SECURE_AUTH_KEY',  '$ym:JFpGiov<rHr<*.4X5Xy5sbYY%k@=(|=j9pNS8ja*QCxK6waouGsjjANssUIF');
define('LOGGED_IN_KEY',    '@*5!?#C^;7yVx-;$zd8hVrJv8G{Z~zM=EL2s54H{?|NCAj?$qL<X}_houfLnN=hT');
define('NONCE_KEY',        'zl&v@!8c)4OrS~/M8>#nCqB.@d[YE3^83bdFU+X4vs_K~TKVE+!HDA(ZJ;R!E1Fa');
define('AUTH_SALT',        '`t?b]KLJ/_pZy`-f?]3P>V,RyeNm3ip=9Ci=lH$bWN}FJ!NR>[!o3HQo4h~Z{^.v');
define('SECURE_AUTH_SALT', 'Qk0}]A4MkGb8e ByYb;uYpe>*ecnN_A$]pq6~Jiuy<u,!FxM:_TGGOT;%ie#zkn_');
define('LOGGED_IN_SALT',   'vDyTR1_WFU]bh#u.n^!PgEQPG>/.pK|~tW<m/rkcaFQ[T#`YBZrPqv#!p9ZA8&[H');
define('NONCE_SALT',       '<f4A6y{ c~$[<[vB0<N7vmTIV>XgwCqvd7c1:vSt{0fa]-v&6|o]+?@Bs6]d[DQF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
