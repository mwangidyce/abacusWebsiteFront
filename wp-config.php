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
define('AUTH_KEY',         'WWk+zoiDMK+rJTeiV9RFQNi4t1/QTNfQ0KKWMypZvUqadwKw8VFrtF/zPF6Pu293G9I59J/7VqisffzFbXkXmQ==');
define('SECURE_AUTH_KEY',  'XVSvFrW+4rsr6Nmnr7DkjRZE51Y61pkQQwEg4ClP6gv4IyYHgtaGXW58k2AcpSDJ+dXl3KfS8dVoxJ8vNjtvRg==');
define('LOGGED_IN_KEY',    'xYEL+F1U/8u55tD2GizN5ybSZTArlgLVHNAJrI+gFtrfu46jXvK2D7kcjA2JFHqazoLunsJh03V+C6FgeoN9YQ==');
define('NONCE_KEY',        'sWNNRTpsiTmdl4ElFHek+jYUjyRqw1W4bWUx2tTQ415pOxVnjFZO+bdKeK99+Ll+ISD46lm18LB0vNpgAG/aZA==');
define('AUTH_SALT',        'rCkl2KaitQanXlKs1cRwFRL47qvK3eGcDHPOMQJ4ENgr9rWorFYcJWhvyeU0ZSfEyThRyORiTHtjlSzgQHQknw==');
define('SECURE_AUTH_SALT', 'p9y6yU4WVDxMaQohsgS92WJkf0Zgp93OPjdH+RsERI0b/XCOl7GOmFkNSMo/AVcZnM7nLpV4t74azU+HmDbibQ==');
define('LOGGED_IN_SALT',   'v83jJ3ZscICYlGOKDrA9PxXNvBUVqM/ywHqAJmfQYiKuG5nYEe2RBdnS6G8NzUMRfwuZt2nqbz/oU3tHIDPlhA==');
define('NONCE_SALT',       'OJ/6RZvD+tegorANhfBu7+TU5x6VGZHvmrtIpCvFkdwzVBp/Svay0mFMG4X3uTuHW/Kglijgfms5W6nmu3SOlA==');

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
