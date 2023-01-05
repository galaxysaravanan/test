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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saravanan' );

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
define( 'AUTH_KEY',         '?Ro M2H9g}i #ac/w.Ua-l=#ov`ag@H=@/ m.%uR]bOYRq/DD[ s4ny`ab<-oyB-' );
define( 'SECURE_AUTH_KEY',  'pb~(FhQ.7aHZbvQRDzuDXl>&n95 >kt8;8<iOO6;h$5Tf0(W2BH7?Q5dp3=^AI$L' );
define( 'LOGGED_IN_KEY',    '(]5mBSqF)9lkm`U1%hjPD)1+{Q{&*x8sUZ^D(S`4El!5yZBseQ.lv2D+P2|,9-Ux' );
define( 'NONCE_KEY',        'Ny7}Pbt>_>M~ S`,Z|b7 Gb%T<MFnmNaq}K2n=(J])nBnDsf 47+PPK@6-xS#;$P' );
define( 'AUTH_SALT',        '/9h_vlh4y6OHi/-XR9};k}BYdc{I%^V0@?$G7piIyR|pgGUdJp[Q]&rc,q)r{0O%' );
define( 'SECURE_AUTH_SALT', 'Cg+T 3hjcIM|o:#1k%B;]$^q8@#{{5=Da wD!vi~l~D(c..?IVaBo00JtHQXfq-Q' );
define( 'LOGGED_IN_SALT',   '!H-{d3Jgz}MJJoni%&>Tm&NZ)(w+:8+^G)zTXj6@A6K|}vM4rH9!.#}vYkaqJ|8<' );
define( 'NONCE_SALT',       'BUrH3YvETYj!5:qE{S4pLOF]*@~ZBU|06`jhk5f|a|@vXMf)gFkyG0a*XaxSRdD[' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
