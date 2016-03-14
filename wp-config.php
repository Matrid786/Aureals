<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

 // ** MySQL settings - You can get this info from your web host ** //
 $url = parse_url(getenv('DATABASE_URL') ? getenv('DATABASE_URL') : getenv('CLEARDB_DATABASE_URL'));

 /** The name of the database for WordPress */
 define('DB_NAME', trim($url['path'], '/'));

 /** MySQL database username */
 define('DB_USER', $url['user']);

 /** MySQL database password */
 define('DB_PASSWORD', $url['pass']);

 /** MySQL hostname */
 define('DB_HOST', $url['host']);

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
define('AUTH_KEY',         'nt3iouleeoonhsqa6l0gpqspeal4wvqqvvljntpztjyf0ykwwmw1ye0yxry099la');
define('SECURE_AUTH_KEY',  'fhkwnqg79imucwkpnrvkiwd87st8lkxver8qkuml0nwqxj3sps7p69ufwrvpwucr');
define('LOGGED_IN_KEY',    'rmhxl7ymdvtdatq2son7oshbtnmgdz2flop6edlxujk37inngjfex3vzmvrm9392');
define('NONCE_KEY',        'zyfb9zrlhah2ll1huyfmcvtlj39rlrxvcborggnsdfcx8ddhnfdryj0hrj4k9w51');
define('AUTH_SALT',        'hqzfb9zvv6rg0eui2mk7rz2vaypro3ftm9tu9prishpaaiuqhlajtpox4x5bnun5');
define('SECURE_AUTH_SALT', 'logok8hw0mhbyuqxajpp71nmebzl8ckqwzgo6vcnz39g3egubsn1mkd1fhvbsy64');
define('LOGGED_IN_SALT',   'uetmkpj7ela4zpt43abdman8rhmgxhlozpsdkd1ot7jnqanm2sbpcszw6c8kn57r');
define('NONCE_SALT',       'uupqvteduhruu7ecj50ejksqdxy03vtvlmhpisiv85hl45r1ob6sexoldloueyvc');
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aur_';

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
