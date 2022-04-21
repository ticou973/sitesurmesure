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

define( 'QM_DARK_MODE', true);

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0vMQGKrI9nWIqXLn4/zmaUZjI6VAfrmwUgtlLFtQYfCC9iuscUSUYPiHLI2XMWtvUBz2xi++jQnLusEqUStqzQ==');
define('SECURE_AUTH_KEY',  'yxoBiPw91Nsp0BDKq7NpGcanFhiVFMoWToDOwiddAXIoWHJLPaXdMNd40oOC8SlQrwPw7KD7lHvvkqzkJQQ6aQ==');
define('LOGGED_IN_KEY',    'nksR8MTRcT6q2jViXWU5mga46ig5B+ZD2S4ToyjQimTgpuSg9aU0hwm7cMLLdAbErq5MI1PvjJhNV07s6ap82g==');
define('NONCE_KEY',        'Os3pc1Z7X3YtEarP+/Q7Vy8bRiW+sH32B6gwXibw6g1IjQ4VLYH9UBstwDDzWRbpFYN0zqWX8Gcily636yonaw==');
define('AUTH_SALT',        'PEpA7niLW9fDLyWKmqt0Wyr2KR+lLKkfi9U7EC9Dc/2pvplcOTeHfeP3ZLJLsIpRDmEjHB+PllIJorzm00o/yQ==');
define('SECURE_AUTH_SALT', '5mtRXIFo/R168cLYFddOH0yLWaRWqewNlKOHrdtVErqkewB7M59eR9vncDSKx0r4+dyoiKu4Dlq/W0S4UhCIEw==');
define('LOGGED_IN_SALT',   'YpbpjSYTneQVX4sCmKMd9BBhoHEBvFpotUtUsUoJ/FN2282Zvuoh+ZScsbaXakUNwbR00kAFe8AKOyboRhKsgQ==');
define('NONCE_SALT',       'oBatBlyEJLo6vPh77bPIwVJSAg1JFid8QgQy2YnmG0N/qQ58RcZhJuitNMMSwo0ZakkUiBCidIdRcdjv6iY64A==');





/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


//define perso
define( 'WP_DEBUG', true ); // On active les erreurs

define( 'DISALLOW_FILE_EDIT', true );//retirer l'éditeur de code de l'Admin

define( 'WP_POST_REVISIONS', 5 ); // C'est bien suffisant ! nombre de révisions de posts

define( 'AUTOSAVE_INTERVAL', 300 ); // 300/60 secondes = 5 minutes


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
