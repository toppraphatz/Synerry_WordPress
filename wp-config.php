<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webdev_wp819' );

/** Database username */
define( 'DB_USER', 'webdev_wp819' );

/** Database password */
define( 'DB_PASSWORD', 'S4upm[-717' );

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
define( 'AUTH_KEY',         'uch0vwoifjfnqcbkb0zzoup7ufisdixktho09b8n6ivjxe0dj2udysn1yf7utw2f' );
define( 'SECURE_AUTH_KEY',  'xrdguu7sr6td7xwe6n9kz9dnfitlbmrq5pascpnmc6fpy3tfuzmadgp2wtok49wp' );
define( 'LOGGED_IN_KEY',    'kekcrbmy0fnlsukdrxwwcsbdsgiwze4e7k9w2lnux9yeppftisvm1vo1zwdds0uy' );
define( 'NONCE_KEY',        'spsn1bhbdrwkixduz3wfdwuknuhtv3pgjfuzkbv7xbqnalwrginfswvin1gia5tj' );
define( 'AUTH_SALT',        'bv78admsdekdjrizqkx9i2p2nnm6n60kifrhcwzozzdmayfo8r5nrkxgdfvjwawl' );
define( 'SECURE_AUTH_SALT', 'dcibaegcyxwzkok6ig7fxobcmd8im7vm1uuctls6f7tlvhr9jqngfxnzdplfscki' );
define( 'LOGGED_IN_SALT',   'zy2kxkpcq7lu5flnpitrfmplnmi2lhhmsbk57gh1wjlcqwjrasj7k1naeezqh6zo' );
define( 'NONCE_SALT',       'w8h9rhebr8nkzm7hx9hplemkk144iytucoarthbols3vrgltg6gu4w3dsfwguh83' );

define( 'WP_MEMORY_LIMIT', '2048M' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyf_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
