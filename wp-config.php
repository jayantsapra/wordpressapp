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
define( 'DB_NAME', 'heroku_49da5e783723241' );

/** MySQL database username */
define( 'DB_USER', 'b02550ec99d593' );

/** MySQL database password */
define( 'DB_PASSWORD', '71370acf' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' );

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
define( 'AUTH_KEY',         '(xF|?5zMC1%&87TGhh?.FYl<IYQ2I}wBMlKE1p9Yvt:R,w_#QYVBwa6#{ZpC<xAM' );
define( 'SECURE_AUTH_KEY',  '{;uL*SddqM,pCgo4];_)C/p3_D2Jk}h2bf(ht?D;`;F9]1FxK&nX!5LE5ecW,e(n' );
define( 'LOGGED_IN_KEY',    'tiy<|EOtkrWIP|6cyX-=VG34tr&|(~VQJlc7f8$z1P?^Ar~_,r@_Ve0#=m,hz!&<' );
define( 'NONCE_KEY',        'j]JvA6]2o.M:tg?XH>Lkt$O4pCG,3|RkI=?/KvN6e<W/KU:!f1:o74Mh}E1;:87:' );
define( 'AUTH_SALT',        '|+Ef16Z;Hb:)mSYm&JZ{5&FI5D5*V-AV+2,LbDuLSqVlHY0ASxShr;Nd9ZAj47G]' );
define( 'SECURE_AUTH_SALT', 'Z`-H%v+E^9/uL !Xmt%iQ+F24lJjM(*N(j!XDZ{g+w[3i3Q)IZ~&9h5``qVOSF.s' );
define( 'LOGGED_IN_SALT',   '7s!kAfOy@Vo /g~I0kIZ^=P>f-mqi|I.k35&xd=<;UL]PUG bBj5gii1o]CaS)!H' );
define( 'NONCE_SALT',       '$AqHCK,7tRf4*t4#;,Ev`u;G#$v#wDRI[tB^)(`iMix#:?m@q9 7Qe%v(j}JpkL]' );

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
