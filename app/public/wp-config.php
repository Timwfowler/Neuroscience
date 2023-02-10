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
define('AUTH_KEY',         'XHCyfRfQga3INMKysXpUJvQwh6TH+rBQkyyI6c8MHc+ECmLAvTHFyr9gL+jKvM0cIuchWWzaIYz+PsvRjIdY9g==');
define('SECURE_AUTH_KEY',  'dGMlE2BbCiuvLMTNa+VUap+mR/BfyeQ9U2LAo6owsgeOu03+lR2YKGQDYtywYRerSJfaX5H4KlVtmU4VLGpMyQ==');
define('LOGGED_IN_KEY',    'GPHINmqtC+2B23royYlJR3ueIFjRuvFCPxix10YWa9uuZVZ7P89VZUPzHAMtPJzi7FS7nAR1mSODE4Edei2dwA==');
define('NONCE_KEY',        'YjSbOq7xFGJdpaglhNQSe+ZZBTpaxGODRugl4jJo61cLG6HQSvogoMl05g9gF8RUDjXbxs/t3mCEHwgXgfA4/A==');
define('AUTH_SALT',        '5KAUheDRA4tj+jt8xVfFhu/eAco7hgzH1qtAk3Ht70FeczYwZYPWEczYZh9/pG6m8YXFsOBskUFw/f40zq4sMQ==');
define('SECURE_AUTH_SALT', '4tOh/amv7E3PlPLFtldzk4vLjeatHhcHarlF2I5xBNXABYAVgEIaAGzQZI5ibCItPhw3Y6MfK7H0a5kzq/UfAA==');
define('LOGGED_IN_SALT',   'Qk4VU4m6FEQdqCwToglPUn7/W4InYWs/5g8dQ6dZYwuHkSVua3vI93oJDNSgI+4JN0OVQD8VPWzcm+Oykw5/dA==');
define('NONCE_SALT',       'u1QqQiGnLb8cwT9L8Iv85DtgL/g7kM5/i1orzxEpK6D6GXd6Q2bqA0rc71OgBRqgaHZr9s9yNncRHsLoCj/PXw==');

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
