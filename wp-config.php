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
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<9!Y[~14>c_%E~Bo=~5-sJ#O3KKVK-?[:[gokJY:CSUZ:T-|v,iW0Bo6rJme:MLV');
define('SECURE_AUTH_KEY',  'o%kr/(dJlE-1)K~p^3l`A3aUdV+o|}.zJb|vQ_-m1;WRFoPeBxcd pG|rP1=CNo%');
define('LOGGED_IN_KEY',    'c6GNc: o=a1kFcm|w[/2lw+;y+{`IYE<vtss_WWFR8N-u^@`77[F?Y?D.p#U{nFP');
define('NONCE_KEY',        'R(mv$=qtnYsKjB0KIp@PCFaj n%E,j@.$?R@75~JB.mP,sHSG&i.=^Ms{<wp<ija');
define('AUTH_SALT',        'Z>*aJ1vTmbc?P(:337w*3rZ)XA3,qF_oOXF,J^bmG(hr,DF!OKa{d}U5}JA^cNn1');
define('SECURE_AUTH_SALT', '53<As*}#+V3O+uER j-++ SUT^$>sQY>|!Y9}r:N-WxU{4s5M6+[~,}X =Ka[G%w');
define('LOGGED_IN_SALT',   '9ZC8}J+NJ:=zkfL%.wuW+t.}nc>nWUj`ldQfM,cb}:,Pm1?]3QURtI8ihNUkKTmx');
define('NONCE_SALT',       'V|37e5ufAu^L |=+H+C](nq[.TG88XSN_$nzl/PB-M2_N(mF5=K:0{+%VJeJ?P`9');

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
