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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'L3L(fb?PE523@1iDZvF*#uK4bR=pLa:>@#RFX^:Qcnxea0wL+MQW9YWsBgP+27|I');
 define('SECURE_AUTH_KEY',  'QB@A?5-m#R%AL`hjU+M]&d<&Oc23>CR6xsUI|-YaT#pdX[ur3begSUbH*Ta0`usU');
 define('LOGGED_IN_KEY',    'D|~.br+g[@4s7LAiR|eR<*Vi_i%}F0%xlb1(^92zt#X-0_d@_E}`[Q]8_5}!(J_!');
 define('NONCE_KEY',        '^{XDy[y;[gS_}$G4]<slIJ8ZfWve#PkJB_fqO|3_;8Iz7,Lh)T!+]4H1`jWBv,3H');
 define('AUTH_SALT',        'xPk<[,6xF|c_x:H^RR;uqC%>6I!Sfy<|!+`F$#Nc54e_H^Lxd9q-Xv&hB4<v5e~2');
 define('SECURE_AUTH_SALT', 'rI+0S{tcvn+|Bgu![J+<uF-SreJp76wPWGrH.1oV.O*4v<Wj!oS<m ny3_$deFqV');
 define('LOGGED_IN_SALT',   'ujIt$z-4D7Gk,nLzZNsQy !frTi~!&_<`d..h%TIkR0U&LKQ7+q;eoDh?BeS0McT');
 define('NONCE_SALT',       '(xdEP4KGLn:D|q|_?{qk2(-Vh;5D]Td.o(CJG*s/RlOsMl|+>x~7ozAr5S9z45M0');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
