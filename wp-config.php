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
define('AUTH_KEY',         'VO5c&:V]$?De=p1#{YN+J3Z?oE.^3fcNj7vlKo.[ DT-WN+/6-&5Sb)Z5|7Ty02D');
define('SECURE_AUTH_KEY',  '#@FF?IUxGAV3Jd,;$X}+u}d*M~{K,PKiuth@r|6HP<-b&paO0(BF`di@G:gP:z$3');
define('LOGGED_IN_KEY',    'BfWdW_m=;O%J1;|QNI1)*}eNCQ$(,[OuLgnH{a!b(X6(V4 K>p{cLYdLdq+`d,i5');
define('NONCE_KEY',        '`3jFj]m($>phN!H$zUgE l}Ixh/Bf0PEW`&{h!.o6;[,nHp{{w}Ii)gIv`&27mzD');
define('AUTH_SALT',        ',p8,:_D3I/g^gNVeB/NrHtjZzDAev&ui+GDi7rUqxT*9D<Ttie0:;#yRSH~Scrmw');
define('SECURE_AUTH_SALT', '@[$RWhZI]B%>a}sNAQM/q@0S]HAPj?$f#Vm;,cd#CfoSVSn_nM:G;Lhe]-`$jYLd');
define('LOGGED_IN_SALT',   'Nj$v_E0:oH)d0x:cbq/Ps<nXx794+7ru9.n=T,g!V[ec77yhmFzzpaGWqx_Ff0o{');
define('NONCE_SALT',       'Mf]yP8R<U=ib>)jR]pF!2|?hUIp+w~XF;>FNwNsppxXZ{pEevA~.4?c_$}y5u6@S');

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
