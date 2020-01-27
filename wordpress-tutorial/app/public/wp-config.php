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
define('AUTH_KEY',         'JgxxF8IaGHjAlxHLgDMkVb0JH3OQ83I6WUhd3m/Y9Q4rUky2vFV+JVyvkRoajsX4rSonQe/NrJmubti7dFsSbw==');
define('SECURE_AUTH_KEY',  'W+9GYb4fpCwRUmKZRQNuHZGXOk36/SqAHS37FcH29USKFsTv8G4UKWOLVz87oKGq+YwoIEsPdpiE3pA4gD4h5w==');
define('LOGGED_IN_KEY',    'PuPa0vMFA/M5axURKal3EfubeZ8byxk4SkfMehSdR0pdo+NLRYkBNtGWMXlknQ3PVHYfUfJQwzdaw7dr/swIbg==');
define('NONCE_KEY',        'vc9gUNe6OEA7eouPscjmVGpg9RItZql7V6hlaTbAG/2BjZrG50NBA5ZQeBqhNrqBDBrdqEAvIIE7bRLr4S1n3w==');
define('AUTH_SALT',        'Y07va7c14CKaOu+Bc7Pm19g5f9BXddJ/DMX1xey6Ou3PPo+8zdc62ByaCixB9PCr5jN6wC+g6QUQAHBh++C6MA==');
define('SECURE_AUTH_SALT', 'zRHiTE4FZImXWnWJFicWAfrPOJVo4zZ1jnC3svMIXvqsYvrSQns4bLuJc/lgCyTe4La6Ft7r2R/Ubbz701iwZQ==');
define('LOGGED_IN_SALT',   'V4B3gVxhGR6ntv28ya8qkAVVfQ26SOpz7VjBkWXngj++wO8faN/lu3CwQKsVnZ0AxSgc390ACsx5LH6GZfvpFQ==');
define('NONCE_SALT',       'z5HR0OIHrDjCe9hkwGd523rMXsjot47tL21w7oH0JUwSRBgZbqu3ERlMv1vC6QAiZMuPEHB2e8V554R+dTqHYQ==');

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
