<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ichodae_demo_dreamhoster');

/** MySQL database username */
define('DB_USER', 'ichodaedemodream');

/** MySQL database password */
define('DB_PASSWORD', 'remnant12');

/** MySQL hostname */
define('DB_HOST', 'mysql.ichodae-demo.dreamhosters.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '+2@cs3T6rlwwEXuAgk/OD0RjN@7A!P$s@eg9Z)J%AXHVuqj1B5#cOAtI~?4"0yZJ');
define('SECURE_AUTH_KEY',  '+xagSk5@)GVCJ*)7f*"9w1l*@ygLESzFws$E/hxFIuh7*lWoPJM!_!(U$"MHD:)h');
define('LOGGED_IN_KEY',    'X|I2:dB*nGZ@g2?(~T$FWg&mf7mRj)_m:pG4j$|LJgJK4Bw/_S29w@oHSy2z104^');
define('NONCE_KEY',        't^xlqXWZ|p0FgK"a/+ytz137b7#ytDck$`gKbx|6P#b(dIl/Y"9"wS#R?0D%wJnK');
define('AUTH_SALT',        '|9woJ@UgbfhC_KJY|MI9r3ZD/;(6OzG4uQ5b8NebCa:(u6~N_V%Un)8M4QQ~NEM0');
define('SECURE_AUTH_SALT', 'AP3+uFduM$9yko8ql3/(^242g3x`uN;VnMf#8rEMkG&J`1X~ub&te:u(NG$?KMAD');
define('LOGGED_IN_SALT',   'xY25I/QAay3h_u^rFfy!hvu0w%IKa(ZU:Bv#w7@JOV/:Q&l_(~LGNuy)bVw:_LKq');
define('NONCE_SALT',       'uz_A;4;9SRzQaJ+CBaI"833~#sQc2CfRXtdxQ5kYg9(/AxYRxaUN|(9DvAqUu4k!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ru2tqa_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

