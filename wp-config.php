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
define( 'DB_NAME', 'pro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '9YfT7Dy}&0;}yX!~[iT,[)Cy;)%U.PE#dnn^9cZa/C)U[A8%qD9>7P`x@Z-?~MQ;' );
define( 'SECURE_AUTH_KEY',  '@F}]JzI7TFRjN)K)=-cu~{Kb?Zl3*wVi?zE@Z(kI[ZcNleavh56)X2Wc5/ub1*`z' );
define( 'LOGGED_IN_KEY',    '(bGY;Lu>tRS^7ZyDi{5]0f.Zt1)~=gU*~,3[OhwyQDaQM<B5!u@[kO^ZP5)gjeEv' );
define( 'NONCE_KEY',        'yNTaI)t/cu+wNSfHh?prraD%1$460d2T4(hg]4@.%qI8w&U2;AH-wS%fgw9g_-iB' );
define( 'AUTH_SALT',        '~%%=R%M(.mSYwsX)7V!n89)~hpNdm.?jHe->zIwrHoR} `9=$jW8* .)ojP}jgR6' );
define( 'SECURE_AUTH_SALT', '~W)bE+KR+5bvaO&o1a3}?7Hb)*Eg/?m>hT*PQHy$}3_pdZUG.vHbZZTe=u)q.q&f' );
define( 'LOGGED_IN_SALT',   'J$WHiiK{;#|(x6/&5u 3#s.Jk5Bu]W#=FYVp=:4hfz~^FQ0~Ni.a6tYjrX-JhLe>' );
define( 'NONCE_SALT',       'v8dherfGQs+@yh[R]m9j[U%Kp$dM55$VwC%;};O0DBHNH$VpW:(Gt~37IOcXSuWn' );

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
