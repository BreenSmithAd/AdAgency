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
define('DB_NAME', 'chrysaet_wpBSnew');

/** MySQL database username */
define('DB_USER', 'chrysaet_wpBSnew');

/** MySQL database password */
define('DB_PASSWORD', 'dS4tl6eP96');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'qubd6oivxsjoqu8f8qspwm9v5vqd6jd3xxsjkcmew4jtqm4w4v4xa3utubco0x8j');
define('SECURE_AUTH_KEY',  'vulxsjzzhktfixjasnl631kp7uhtc9kbjnnzloj7khd5ydlpe5fmlkpsfkoivruv');
define('LOGGED_IN_KEY',    'deyinma8v2cd1o80hyuighrqpoohqj4oyonsvsxm1ewbticrxo71mldd5prqm0hl');
define('NONCE_KEY',        'rt199q1qtjsy6rmwvmsirjw0tqoelx3rwslzptzmwtupkyvpnsdoxjegwxwvxree');
define('AUTH_SALT',        'vnq9hiztdyvaty3xu8heopxzhcrhv7hthqvxdyqqgg9lcl8kvz1xo3isaadfwdhg');
define('SECURE_AUTH_SALT', 'igjiygevjpmgsumzkedyh3hvqkkut7qe0eqmdpgvi8mg36eplpecj9y3hwebwo6q');
define('LOGGED_IN_SALT',   'vnfd0vpmxm7mpggdqa0x44i5cruxuihjepf67yqq9nm3wparyslg1vawbmwgfnq3');
define('NONCE_SALT',       'qzmkxd5b4g6oxrclt0pkkl4exiyf66t3ikqjz9m5cmm6nslj8tamydekhpncx3hs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'adagencyatlanta.com');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
