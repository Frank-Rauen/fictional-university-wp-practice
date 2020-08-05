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
define('AUTH_KEY',         '8xyhxKhyiImbemND9Y7Z/qNyqyoT+TUEc0HjI1oI5B6jS6JUhatxM2YAVTOeampW2RoPUJifn7EQvKMZhxdRuQ==');
define('SECURE_AUTH_KEY',  'kJFTWGU26lagEALDMEIRXbuVJMK40ZRn5eSA6SnmvRmOy46cwpPJabqmweCESVIYJU7a2FO3ZdJeM18+iKA3jA==');
define('LOGGED_IN_KEY',    'fh2lOh/imDQ846TNp1Lnyv5CWXtY8KPtoz77uM7Zu6AESe66cBRMzSGKkjEOd84FICbVD5PNvJR9hpeNa4059A==');
define('NONCE_KEY',        'ntPMwUuWcEqvq/68WaNZQBXrnj0JNVSrvU08P5TO+7wq5BI99c0l2X7a0wPl1wzf/+0J3FJ6b2MCe9mfwhU85g==');
define('AUTH_SALT',        'blccmTHBQzlYXFwfZg/Pj3bH7IbxQMHSP1DaXqJjoDLJDiR6cIlXHS2w6KAkvxeUs/3oFGxD4zZnh/kJlAMsCQ==');
define('SECURE_AUTH_SALT', 'qJ6jD7rG9vVg+NQgshfo02fRSbpddFCeB8e9w8CSlz0Hvq9/Lq8l+REGibCWF8NViuLFpdWIa+YOh1Q2hkzBew==');
define('LOGGED_IN_SALT',   'nk4WVYhPgW92cKprprtrxyaKcDcBhP8D1E2jSKmmx4ZtCEmrhYabjLMyUdKbOjZTu50Td5+diXgiPwbrQcyiXA==');
define('NONCE_SALT',       'AGqNNei4gfN1csEOFeV7cB0TXKmDjyKOwaEfBiqX87EeNX1RZvbVvypB8T5xRRcMzNqixVag8anDlQXddzaJDQ==');

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
