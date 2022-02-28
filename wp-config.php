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
define('AUTH_KEY',         'WtQzarmm/6Z8/mW7rKCW+Y+xGKfeQjM0RCvFfgGfE9ry6NNT9RPVWNqmJucY9qajqN0ologzN8drC6PsFQyNOQ==');
define('SECURE_AUTH_KEY',  'iQHrxS2XKd0+YHNAJ7neR++KGW11B96ePDYhnnrWKsOwgAaN1TPziW1f8oZlc19qccC2OkNZRFEiwFXB2UF9cQ==');
define('LOGGED_IN_KEY',    'kEaWQnYDD2wOuxOGFQ235EjwJf0OD72vl04olI2hPHC4mXxQ3PphXhNxqR9qhtFjB+U9Jb+mj8bS1ccbbiA+ng==');
define('NONCE_KEY',        'ewNIrvI5M5pL8OOAY5P+HrRtMShYMITkE6mPK8Ivm6sFkZD6Mtxmx9vzS9Vr74XF+VHqP/IYH03sl4R1ZdAV8Q==');
define('AUTH_SALT',        'LoehUHgu+lAivDi6j/hAa78B/6H2lPeSW65wEFDIXfs6jFd2eJVKxTcuHEwjHnFev7PsiSUBoTDVkc8PhjApgg==');
define('SECURE_AUTH_SALT', 'NLSculECw5Dh9sQ2nbxag+3RU4DNljFSMSQ+44lvxxYrQq/d0ChWNRVdC/ZtNnUcsVb4BmT1rzjrtNSXhlAhbg==');
define('LOGGED_IN_SALT',   'oiSwHBb/4Bom4/Mo8E3zF/rcGQtgF0U1DkIE5sQD/iplbcEBsIpTsWO7lsgLuzNeznocBHZAymwk7GzvbMwKAQ==');
define('NONCE_SALT',       'CYsdciTG3uT+urZ0+fydYdIezMs7cVwYr9l57yxQBeh6ZX7Ci8EtWmt0NkzGh3yjRlQvM/Zi9isZkBUpZMbQAw==');

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
