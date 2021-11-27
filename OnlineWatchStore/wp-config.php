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
define( 'DB_NAME', 'watch' );

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
define( 'AUTH_KEY',         '}{mqw!P Hs;t0V(_@%#3f:_qz4{/ _p0H5JGn:vD}1+$+?[ MP:Ho?]U-@=~Wt}5' );
define( 'SECURE_AUTH_KEY',  'kqu%=z3j yx,~?b4tNGJ7sy6){7cSD=TcLI{N~uI9cGB>f,TdY8lfg*O!&.PU$F*' );
define( 'LOGGED_IN_KEY',    '7VeEuQO#fE@}ZU^~-C,8@qTyFzy{%=G8@?G&bXlmCO&tLE_3JF1y?jIF_<@iNSuI' );
define( 'NONCE_KEY',        'sqOkV.ml>&Y[P-{C 4PJS+QL_G1`qiwTh6c4p3^P2.ZzRa!?R;Jc??v4ho0JL/e.' );
define( 'AUTH_SALT',        '+Yan}%F/^8VBWk!SrN6qP%OOSU#k-lNmz:MR{8$t7?-WWyEzR?)c#<y<n$F#Xj.2' );
define( 'SECURE_AUTH_SALT', 'dvPH/R~:mGHAQ51Rt@#B TLc 8C&p-8fXsy.2|;;=KCN&q+<{!-rB1?z&E!u+;a/' );
define( 'LOGGED_IN_SALT',   '~&Sc]1FPXV;=aeYZ),<?;{ocx9_t>lyxK#u|&;8W +c~JqxOx>g s?k1Cjc}XN(6' );
define( 'NONCE_SALT',       'i~PeYMfi~8+Kg/LvCB2DCM7>,hfs5rA&Wmw{3MkYoLckTt9tt;t=5~vprp&v>diU' );

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
