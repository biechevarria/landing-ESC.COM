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
define( 'DB_NAME', 'ESC-theme' );

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
define( 'AUTH_KEY',         '^}F=X7DgBpvEO6;dJ`RmqAJ2P}pJwmW/ )4-ha@k1(,0}[gM,SL^{&K=&Qk1iBLs' );
define( 'SECURE_AUTH_KEY',  '!u3&t-|k/=Pf{u!Suw=2u&???>spZ(F1R!-|wH~<O7|pHx}ti`4$7t[Vb*t9ZKWT' );
define( 'LOGGED_IN_KEY',    'U<8HC|IHjLknq?63?N|4:!0aLk]`3oCd=o&,`BN<;2vGL$J,b>(1UF[-IYqT7$79' );
define( 'NONCE_KEY',        '[`3,7t$7wJsH+cy&E?I1}t:_L+fEH.I^40OhM=2J|V)CQ3Qe%]&dKndHMsT#%b&f' );
define( 'AUTH_SALT',        '7ie6[ry9/7$LiIH(O@ZtE >%LDI8^iVgAPE =zAT%Rn/{Vb?{yiW5; Lu7;]nmEr' );
define( 'SECURE_AUTH_SALT', '>}>R~,P(Z_`<q%n(ve>U(.1sgey:6hj2*u-B>?-CEYe:46!a%-fZ?6h)=qU:mSSs' );
define( 'LOGGED_IN_SALT',   '^<Vpv}KW-q.~F,rLqJ7J+x4*FiQ)]oJop_gPH}:S^.5x-Hd%#Bd}%Bjcly&>-n:{' );
define( 'NONCE_SALT',       '1[Iq@e&26r%FgJB,;{);D1MZYr,M&{A>`:Jg4QUSm@>(2j,EQ&1_EfaWu4^N&>Xz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'esc_';

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
