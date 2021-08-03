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
define( 'DB_NAME', 'wp_vicarious' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '?D6}5]]*N%h2GnFY>+v98+G|95#m{VUVA]W|mz]G}sTAB40$w:%M8(0CK)bH;&GY');
define('SECURE_AUTH_KEY',  'va+3i)1?`(E[86S1RU+VYMJF{HDdD(~54pKS4C|A z0|4C8OO1$WU=q5|q`fZ.r ');
define('LOGGED_IN_KEY',    '`n1&7})RtecBzSelU2%&Sh)~4,$<SGVBdPB:mTg.cqz*P]nZ-Qh3GAa10.ZH`DKA');
define('NONCE_KEY',        'w/W7^:5[;Tb-x5pJJkK<{&{[KuRFL(|C{R(w/dB}YICG=M$jCux=G|G+jm=os#]5');
define('AUTH_SALT',        '}8*CW+6>O=C.#+dK(a5#,8X=V{#vy1M/wW#,^P/5iJ/GHtUwH`IPfW]lBZ,?}qCM');
define('SECURE_AUTH_SALT', 'eKQw$m-K<E=-U6OC2:/S{3|4H6WJ_ct;As;jnh{DmAsn_%>-17oxoI)?*YL+!Q92');
define('LOGGED_IN_SALT',   'x6a;$9};9!|6q]$.`sf3emMMD*/AOSa2,Sn|sI/j0qFCw&v$Ck@h0WlXR|)U%$dV');
define('NONCE_SALT',       '-9XY,4n#;=iq~Or6:`}&0DD0T;Te[&N<s s<2[4~9>u x*.$Ml~j2o.:omuzmyB^');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */
// Display Errors on Screen - Do not Log
if(WP_DEBUG){
	define('WP_DEBUG_LOG', false);
	define('WP_DEBUG_DISPLAY', true);
	@ini_set('display_errors', 1);
}

define('WP_DISABLE_FATAL_ERROR_HANDLER', true);

define('AUTOSAVE_INTERVAL', 300 ); // seconds
define('WP_POST_REVISIONS', false );

define('WP_MEMORY_LIMIT', '256M');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'https://www.vicarious.test/wp-content' );


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
