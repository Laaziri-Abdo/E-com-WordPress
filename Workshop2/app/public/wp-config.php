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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DxxYHaYxVkKqLxvCMHjq36T6xIpiEC+4+0FdeusqVVqPFRJp/I8M9cv+K4XdjcAlux7N7SLWFBdpWTJgmMIxvg==');
define('SECURE_AUTH_KEY',  'PHNk17W95J3YUFBDYhlaZPpTJcscNuX9aIi7YBtwbxku1wYlDxZlAowRtfcKLBfhcQgoDAGcfs2JBufM/1NCYg==');
define('LOGGED_IN_KEY',    'mZ4fDS2ztkHd/bfayUNwsLPhgD66pWVv7EWom7DXBJFBF1/jiD5WmaAWwnfm26k2HdDt/kofocWAT5oERWAdsA==');
define('NONCE_KEY',        'MoYo8taS9faTijbL58FJYBmrWv0DgsKu07mQVWXphCAeXbiXzPLSgyk4yEZJZfNJy3FO2877QUkYNVq5Ibb6Tw==');
define('AUTH_SALT',        'jv7pSE3RxLye+OJUAFY19nClVkMjMHvh9UmqKREcudNgJzIoZanzPsyNf6Vz9VsudoGhTgiClnvleVidj75gvw==');
define('SECURE_AUTH_SALT', '4EoZ2bWJ7U2XV5fAHu0mdbrJlCUSPY2jzVccaMGCsPTcKYrncvhGlbwDc5xcqrqBw4tXB/TkE9OYR1JG3P8kTw==');
define('LOGGED_IN_SALT',   'PbEZEmCnS+zfCCS+r/2DwJS1II0grqPaajsnpc3w16uCU3fsjIoYM66zYgiE4oO70uFB7yris4UJAcretg8T0A==');
define('NONCE_SALT',       'Ey0oFKkfTr4PVKuRgvVxMW8nfnlXLdOOv2iANYKca+IiCEhcF84/dpAI7zc8UC+agHyY96TIecjjCMqERCzgTg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
