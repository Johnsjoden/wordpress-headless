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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|$[h ipDt8Ki+Ikq9.dLP<hV+~?:#F)U5C{N%m.0b:I;d}]$iF fA{wn)_FGb3yf' );
define( 'SECURE_AUTH_KEY',  '9f%[/xOh}.P7ot3RB4Jv`f/+m;o9M?3X@IP?)-MkCUsv2(@d AlLwXPXS8(Faty`' );
define( 'LOGGED_IN_KEY',    'YlXiQSnj5tM%DF-((W0e|J[&F;weZa(9WHn/q2/[f1i[FR;]1syH(0|z)2gU`9B:' );
define( 'NONCE_KEY',        'Y);/X~-/SDv8hU5^]}R$ezs<cdPZAU]:T]UgHhTn/E%sV}}3+*vn%FA`-pvoPs#p' );
define( 'AUTH_SALT',        '{&F4@YiiBE/c43Q~)]jS;5/&1Bk6w/SiQtmrlGmQ4sbbuEYs&o*<pF0]NX1|E?e$' );
define( 'SECURE_AUTH_SALT', '7cf^cd$Qc,nUS}e$G4}WkNa9Jg;-[_N8y{]umj0n_t;#S8}EU,_ZV}}7Kf/G_&+/' );
define( 'LOGGED_IN_SALT',   'Fb<?`|uB<7r@1z8T1,ZicM8b`VeHP|XoM0.3?sBi~k#WD:vW=9g)3U[R0p#L+69V' );
define( 'NONCE_SALT',       'U?zb4-$+U{bwGy#D hL-sxm*{S|W+;I<_nFl3z)+I*a&,vVJeo=/J,ge$bw-Jmz!' );

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
