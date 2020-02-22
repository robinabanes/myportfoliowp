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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         ' xwxXx!y/~m`I>Y_`7RI:oU39G5pNu2ExnsrDF(K/$aC&yJ-G2T1m,p%Nt5|Vc</' );
define( 'SECURE_AUTH_KEY',  '!2I<g2)w.5VLvPv3`?B--~TaxR5dr<YC6P7Z.(/MU/5q;Lm9^:erU~snlkd6& o3' );
define( 'LOGGED_IN_KEY',    'N9K?^^2Qq$p.Gw8UKrI,9J07,Q%X &Z4OQpKZ5<D3$92S8@qW{E(9N7rv6gjgJkF' );
define( 'NONCE_KEY',        'GTjF23< #ZAMP65GG#*wq[1Jf&2q=4$/!6ed~8&Jv7Z#BUhT@mjM5h2_L{cF>Z8s' );
define( 'AUTH_SALT',        '*c*cXJ:l2i.2*tiU4x(f2O%Nt5ed_ K*3>z6alouC&cGreUrE4?yYrX{BjC2|K?0' );
define( 'SECURE_AUTH_SALT', 'Vbf![h+2Rfpf^JYo|3>K[P]o4A+%S`G^yc!!2M<}_?XA)mcK?EKW?4?Yp+oXxF.;' );
define( 'LOGGED_IN_SALT',   'o#5|Iuz-Z- BkJM&@,+~icz!ih6LebwNYJ2E%M2f}^ElpXk1sSfIF$u?3B+mTHK)' );
define( 'NONCE_SALT',       'PBIuzOA)kew$1:f<J)cE3ReIq6^f:@[|w&]iv|0GIE/xPG3CR[Fz0yl5v8i^d9Z8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
