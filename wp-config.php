<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digitalads_wp202' );

/** Database username */
define( 'DB_USER', 'digitalads_wp202' );

/** Database password */
define( 'DB_PASSWORD', ')MSj81(4qp' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a4sawgfjhdhvbyifvc0wuu7vcqr4t6mhzjiximwbprhlfjwoteem7wz311srmpkk' );
define( 'SECURE_AUTH_KEY',  '46y9ko9hqgkscf4hpnnmeshywcruvvb1qs4tfskrdzowh1apjwsq9jwvanvpis4x' );
define( 'LOGGED_IN_KEY',    'vpcj4axzq8etsjegot6tp9ryws1u7yvnvyzvfqzcoohhfq2lopcfhhpckoodomw3' );
define( 'NONCE_KEY',        'xnx7ltylgviksogaudjgpaoygqszypksveaddxok8uo2kdvfcs65dnlcgz1lvx10' );
define( 'AUTH_SALT',        'reqshrjdnsrh4cfrtxbhdse7r8o42nlrsb5ztbcffti7wkiljszpkacglk3pi82p' );
define( 'SECURE_AUTH_SALT', 'q4osjpqyxc4yn4yvwl8aphupsrdui3jea6cj3wid6nstrz5ltnqdlt7zk5eblc8q' );
define( 'LOGGED_IN_SALT',   'h1qxndeq2cq9ja5jocrzk4h58ym30vbaar2dwdrhc4ingropj2b8dxvrxreqgeqi' );
define( 'NONCE_SALT',       'dxnzlut1rcxmvkeyn0dmiykfwnshsl0jxcirdjlofubchrl7bcub8yxz5wjw3uf1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
