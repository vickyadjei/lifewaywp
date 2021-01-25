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
define( 'DB_NAME', 'lifewaywp' );

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
define( 'AUTH_KEY',         '+hW1)i+T~Ewmv#>1]RZX*,a2aI~1i[C>J-ImR>X D{~5OyCga}ykD+5sJYGp6+wF' );
define( 'SECURE_AUTH_KEY',  'r!g3OcFFS_JhFFhFpdH&GF<*lj-Rw{;)w$!nZgU,iG^ t<jry8GT[d,F|~;f:gcz' );
define( 'LOGGED_IN_KEY',    'M3EX/*)R<=FnA5@kY,pbL(syRmmDOwFg.?L#)keX~[X5[s5}9!tc/Qx:hSMG{*XB' );
define( 'NONCE_KEY',        'mJx|{s!LqF%FGbs[%{<KTFSLR3:2:B8TBRw!c>B:PSEHmTbS=&zE,C9]a=&JbG?A' );
define( 'AUTH_SALT',        'l[wgqOIu,M-QgeRG-jp4x365a`ZoJF%8eLkl^A:)Kl{^`_G;&EV:[MudI| (&H&r' );
define( 'SECURE_AUTH_SALT', '9MNhXv!X_zxlFWbzTaO@t4.gCS5km*)]|SHf6+TvT9:406Tw!7WlhH`:;GEuY<?`' );
define( 'LOGGED_IN_SALT',   '*.1 k1!P->iP~VP#Wpq[g%Z2 `VBs=xduM@x7jf{Y`Sr#aU,vfkNv[8#`_Ai&0KQ' );
define( 'NONCE_SALT',       '^(7M`Q;)zD^$Dk&I3J2SzjT8M=m2.BVrzxOW|+{VP]xOEBwnCy<S9(hnEL|(#Y _' );

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
