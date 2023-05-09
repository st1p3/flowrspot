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
define('DB_NAME', 'flowrspot');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '6~1%/TelXJ!yPmX+5aXY<y[{Fan0*WmcE:G~EDzkQvmk$fYJDe%o!OM&%6frrrpi');
define('SECURE_AUTH_KEY',  'dx13O^pBq]xpE5MG<#.]A58|XEgcWh%u-&lsNVgXWX(8X{QH;?0#WSW~O9y=(Oo,');
define('LOGGED_IN_KEY',    '<(pnR!=aCA|h=@2jA,>,Sh3t@,eh)TNopBH]y#{iV-T[Vl|KmmavbV+IY6NCbCK-');
define('NONCE_KEY',        '!Pz|:jeHNeaE7;Lu=~c$:G<JSg$B/fl[pl?U6~*zm$Fg3wRk.-{.fD~[EmuV~}2O');
define('AUTH_SALT',        'FlxmB:O(;+,oc/_;T[Y2R81t]HS.7J>hv1W$`nbHHbw:qvC%=mUvYc#F3~Zur[)g');
define('SECURE_AUTH_SALT', '?1DF<&DbM-32 kb-f=zTqMR-YF{&#5}_l]}1.kP2=(rv=~Y+nF5+<B1xJ#%_h,T>');
define('LOGGED_IN_SALT',   '*GK XWz%s`X?x(ua(EQgM}e^*23HvVXo#@/*pj/nL$>:jc;h9NM[ap|O);.z}HB{');
define('NONCE_SALT',       'xQ3mnzF3tJ#s@dn^%AA_M9+1TuN>S94;gs19}H|u$%hD^bqnb/O,&Z(RF:H/t#Q)');
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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
