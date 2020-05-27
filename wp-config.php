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
define( 'DB_NAME', 'fabritechmasters_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h_e?G:hR:h!I%*%MCL6lZOX#rc]6e !c:Z( F:c{r)(v9N9n90i`oi;;E228)v7I' );
define( 'SECURE_AUTH_KEY',  'L8n^vuq)_w[UlY:vY5&{3v,.yy!s)]NKEu2g65pr+X{mEk/)Lq~bg1%wXP`tnXG6' );
define( 'LOGGED_IN_KEY',    '8#Zn+qj0Pl}(RQ<i,~}:;<U5T2o_:A[E8Mq$7qkU%#A*Xx!.UPe1;o:n#zCyPAE!' );
define( 'NONCE_KEY',        '`S74P/8#1C~y)*MzAA~Lix([}hRy0h dh6h+Tz}dD[cCc_m@myxZJ^l?N1/c:,)_' );
define( 'AUTH_SALT',        'TZsK~6_P{@KgDJ;jcs;B(4X[JuU?dev2#{O.?K~UWq.wCYjroRhrO[?9HGb ,.hp' );
define( 'SECURE_AUTH_SALT', ']|jjOCw$i@PxEQv?}|^>C@}c42YPd<G0:Xnt).}[?am1N.E/SCs5X|kxHI[3iXGo' );
define( 'LOGGED_IN_SALT',   'tlHZK^Yi>`A7`!V7QYf-^:<u[-2<(MG|!yDoWA]hfiis>3+XHvx{3(m.~,?*(<0_' );
define( 'NONCE_SALT',       '&j6c}U%eydd=e_ZJ5j<!G))LarV^@l.(^?7!QU3hBK;x}K_K=f(Gwxkt*1CxW8!J' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
