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
define( 'DB_NAME', 'banhang' );

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
define( 'AUTH_KEY',         '%J$F0aQbJA|+b;x.`.I3z]?!{kZtWfT76/SH.aEK:mqj.1:Yc&A+nj[X;{9N,$-<' );
define( 'SECURE_AUTH_KEY',  '5s)ib(5G(C?awC&}Six{Zi!CV3,GE8V!2cazlFYlU[qlqaVZrnhN4s[03V2UIM#}' );
define( 'LOGGED_IN_KEY',    'eK/PXDGPbo6X#V5UXt*BqDjtLg<_8:y,( ><C69~zC2v7pq9^`4 >e67zU)SWNa[' );
define( 'NONCE_KEY',        '|,bGGpv#qC|/n~6=_l*;2knHKs6:/T*HKB0lYu>ef!/=6;&-CX|6^^n%{ s}Zx:r' );
define( 'AUTH_SALT',        '?J> <f>}Ac_!yj98N/C54lIdS6@B&wUmcp8+f`EM2X-rp|jZ-SqPS?W_Gro|MS+Y' );
define( 'SECURE_AUTH_SALT', 's%ro!_Q{WO<b+jmxJbF46^Qer83VDcSkhA^2d$zMPzssM}V~(dEeUX]humNu|E)/' );
define( 'LOGGED_IN_SALT',   '<tACb/F<!FNGJ:|P;PY5Jde,xx<i%Z+z~X]uHqMfDr<4`WinAy@s).<)-FmzAEts' );
define( 'NONCE_SALT',       '^iKYzS50T.2.:c{]j&U4c`7TZ&!5mBmdz<% w2YW&Zy-xj|`Z@m?Tq73z<(E,@VR' );

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
