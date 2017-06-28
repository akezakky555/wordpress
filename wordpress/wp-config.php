<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'zakrified909');

/** MySQL database password */
define('DB_PASSWORD', 'vpjkcV8d^ot0Ut555');

/** MySQL hostname */
define('DB_HOST', 'mariadb-master');

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
define('AUTH_KEY',         '0lut0@b{1%Yo}Q9qTkgot{i?uWwEQuxS0vU:VDe;*>Fx,D7ui1SYzbo-j>~xXvvB');
define('SECURE_AUTH_KEY',  'V:T=n09t&mDJ>~Mi5xb3wtFn,hET]NuZ3a4p+2?FYs#^V~oU(/Bm(z;Zc?m4siFH');
define('LOGGED_IN_KEY',    '3h3Lg7u!i,!0GywR=:cisWpw!plNERbPA-YS%Sy%IBJym([4n-[PBxEvs302w4(}');
define('NONCE_KEY',        '6h<pk_Q(/Fcp)Z(f-L._r-a x^H:FJG@*T1UTz]>,Ob;*|ZXS&qq)VA[[}n9M.ig');
define('AUTH_SALT',        '_kvXm7NkC5PpRHdF r,[Vo`c, lTw^qQGxt2zth`Y5=SkuO-3hd@<b6eU@p@]Y?_');
define('SECURE_AUTH_SALT', 'm7uIKP0x.mDj%<5g2}Qn-hgcvH3^^xq|MS=N>o%;x,@X[rWyT$+~Vq%r)8]:1lFM');
define('LOGGED_IN_SALT',   'F^iNl01en3QtM6YV_UlVq^Ba::xA1~&V[*ddeB>7m/C.K8c=QLU);7o;Os=u-Mj/');
define('NONCE_SALT',       '&Y<jW(%}CiE/!^A-IcK1Zv>0g-! I/#U(5#{`;T[p}=2EY7b,6F0jp95M,aEHegX');

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
