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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          'v]34`!EBlCra=$n6B4d)Oi0*wwgGv8-wS<7Q B?zL6F,B0;$P=MxOc{*oFRPG#5m' );
define( 'SECURE_AUTH_KEY',   'ap86h2f@E,6?0]@%tT,DD1>rZ.JmDFj-_mfia!)?m(S/M<WZ7kBhJ*fC: ObVNS,' );
define( 'LOGGED_IN_KEY',     '&g*OR>1L-jn&<Q#jn7/-[O3#%5-v*gSkOBQ2Sz*<HK`0[CT~nH`#3*u0ALVDK-Yb' );
define( 'NONCE_KEY',         'E1=5UYY9SX^Z^jI5^W{K34g^.{wY(3H@1gv+5(F]zkg7Z^El#]nvH{h6A}G0P3~Q' );
define( 'AUTH_SALT',         '1[%qqOW_R2kUcR5B_/>vZDoehC`ILFmS2dJis%A|i,le9B0m;ly@4d:Vd8%a^?E7' );
define( 'SECURE_AUTH_SALT',  'Ut%PQ43LdcCv3PwHI &;D4lKhx6km#-mM#TX>f|7bYV|kj&cq%W:PZJ~pLG?N;?L' );
define( 'LOGGED_IN_SALT',    '/f4X)?ms<fmi9Io613ka%hl9IEOJomRT,6MHeeP:wD,@jXpXXgQ?vo|mfApf A)E' );
define( 'NONCE_SALT',        'l:Z@bY(xGc<.e?ixBe;#513jzA]#e;yT/Wt(xH}~=9Fd<3.G2xPG;fp59:kSEIcg' );
define( 'WP_CACHE_KEY_SALT', 'N,!/!&BoM^8`xG*,P(53os_M#`R M~YdrYc/JX@w.lnjN8Jj$|.~L|Fa+(W%nZv5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
