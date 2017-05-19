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
define('DB_NAME', 'u502069761_ter');

/** MySQL database username */
define('DB_USER', 'u502069761_ter');

/** MySQL database password */
define('DB_PASSWORD', '@100882100883');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.es');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n^Y:~]<a4-2$%;>R3ErOBf|+ 2S-Q*xe%8NFSkQ|G[N,~*k&,skQ1Zp@,RfT1NT(');
define('SECURE_AUTH_KEY',  'I!(0hlF!+5N:!F?O9G/+%Ck-%3ttK6?1I*2+fVVfE5~U]y[RZI}=[Q^hnm/mF[%^');
define('LOGGED_IN_KEY',    'RL/Y*#(.J)e#98q+hK#gvr-W9l)[44X[LI>%^PzKgXc oH_l4+(8S/Wb]I8?=85b');
define('NONCE_KEY',        'tB5d9G0b`)Y3swQhT6l+-_tnSppdPu) Z+d>A.;v.!Ig,!e|U?g~)UJB2ha+etV-');
define('AUTH_SALT',        '.QJ1z#QCN-fKaO:djo!@6)V4)AIfrkQU)zhy&SJ||kWl8U|MSTp[#<`=~ vN_+P|');
define('SECURE_AUTH_SALT', 'jd1h/@H$HCDH>mfqZJf?Lk+UF?HV_xwUb<q]Z?u7](E%_Q:<7<9wxc?j#IWlR.q=');
define('LOGGED_IN_SALT',   ') @RF,&Hr!LkKe&PE99!{@N!d(`Jwy1l/!CV]oLEpa9N4)>kwZDL6*yQNT:n|>M4');
define('NONCE_SALT',       '@JEv6A:1eoC1EYrC5MGS?l9!O.{Wl vt<FahY9:}Zu>!t/v&/dR@6B}U!66qk2Xt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
