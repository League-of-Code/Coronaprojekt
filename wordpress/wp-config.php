<?php
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/LeagueOfCode.de/httpdocs/wordpress/wp-content/plugins/wp-super-cache/' );
define('WP_AUTO_UPDATE_CORE', 'minor');// Diese Einstellung ist erforderlich, damit WordPress-Updates korrekt in WordPress Toolkit verwaltet werden können. Entfernen Sie diese Zeile, wenn diese WordPress-Website nicht mehr in WordPress Toolkit verwaltet wird.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_rxcsl' );

/** MySQL database username */
define( 'DB_USER', 'wp_onm9a' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cEN!UaC9p?7@z9JC' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '0s|o%(m@8NV152anb7PLgO;0Fg_#n&a7)44-aVSb~%n-Ee_Z3A]F9i/k[h&54kBx');
define('SECURE_AUTH_KEY', 'Ki/#3s1W*L;ED%3@4QmZFr79X683rcU92m%9kDDMNKUNBp8lB%+0;lzEf)1-L[7C');
define('LOGGED_IN_KEY', 'Qz/:aej2*UG;;9#5/3!R&%Sv20(:0y04_6F]6;53h45_yllOzOJ)+by:)7Rj27y(');
define('NONCE_KEY', 'WjpiuA0Uv)U1633933lpZ2)c-VqC%_v;K6m!-5zupM891~Sxu]0cR0Q-@F:9kN10');
define('AUTH_SALT', 'r6aNf[I&297/R4+NO)!APU0g:gN5ryrN([2nD1&j*g4#_u09~cmC9#%1(]fd0~0r');
define('SECURE_AUTH_SALT', 'Z1m#5X70*;9T&22L@Wl8T(34Z]9va29wC2F(aI;UfC09+mLNEDsnq!iE6+!923)H');
define('LOGGED_IN_SALT', '791eGZ%[-T(0sNA|014Rkl9KwE)e78L0Eq@pNL:|dW+4fa#SJ:91XHRy4hvv9UNS');
define('NONCE_SALT', 'I+4G_+199%rM0wNvR&G3:|mEg)_M_7kk87/R&h89+gD93eDv0dKrB(XNTF5rve~T');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '1x3ST_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
