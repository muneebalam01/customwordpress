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
define( 'DB_NAME', 'customweb' );

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
define( 'AUTH_KEY',         '3*Up/`4Qji]YhC-L7NdZIoiB$M>.|a#zcE+%.B$Tfrd!IAMo_+xF:|r26vW9xyy}' );
define( 'SECURE_AUTH_KEY',  'G{2e?_xiWR s$JP%#%s7Rs.?^(fKGB /*luPedsbjOBwU=J*G:n|*FXb$:mU_onf' );
define( 'LOGGED_IN_KEY',    '3p$CI%.eL-Z=d!h$cWYw?xD5^>NzG_&y:c?wk2Mg&n(MXd@e0-Lw{9r5vMcqi1[2' );
define( 'NONCE_KEY',        '4t#%j6?-<r/$W&bdBa$&<-lw(p[s{=47&`yTEa#SlF#LI<QZg+`|y4[[2FnRzflm' );
define( 'AUTH_SALT',        'ZE:>F.pUviBMxiM>omF2q}@4fi.Ks_u!XWkx^5VV2B2v!WE#b|]Sqa)nlM,w|Mn ' );
define( 'SECURE_AUTH_SALT', 'Wpj`8#Rc<D=oTntQYu{7e#g;/1.-R:9y@4c)kUL([u)>b5>LQ6pmFwsktN=Z_K}H' );
define( 'LOGGED_IN_SALT',   '2bvHjOGbV8a}IUIpwCQwwOGPh72db2JMjHqk^*_D)_+WCruiuxwZv7{!DPtv!k=k' );
define( 'NONCE_SALT',       'z7)O<%GDYD=.[[iy]p~LCYG~EFpudMoU9s;ce4ZjWOHRZ?4bczQ[C*)qj4|QtB_)' );

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
