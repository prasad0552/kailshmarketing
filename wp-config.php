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
define('DB_NAME', 'kailash');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'prasad@ktree');

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
define('AUTH_KEY',         'Ap,,LU,cZ5(uNn1F7J#vt_vRv)L3N8sC3:nRZB1~uYCI%-m*U$^L$dAa_tB)x1qP');
define('SECURE_AUTH_KEY',  '$<],6:X:Rek?IdD^[,t;.R,6Z-|H30r#_WK8Pw?4Yp:,bCJ&P8,:&1WiC$yNF/cV');
define('LOGGED_IN_KEY',    '_+`jb%ofY3.>@g8svU7:Y)&ouL_ uoz^o< Ou52&m);Hj^Us`Jr4h1B9gEAeL LO');
define('NONCE_KEY',        'zWXtxi=idDBC91_C= &]2R-!_ao^Z9*,]&S!/h6)V`e{/RE]o1kY8^O*UdZh^gAv');
define('AUTH_SALT',        '93v%_!&6J= A&.1xg_fNw8:Pow?ExY!&zWL7ptt,=bgG7L0wt]{jX&uM8hk9OV-;');
define('SECURE_AUTH_SALT', '*BCNg2U!V{gy(u!!CRl5&@z8JxFkY+P_3}aUWg($5fb3+T<<rL>1+LARw07II`ib');
define('LOGGED_IN_SALT',   'C]3mm4w{YL^gr1pY6`D?qQYdnF%_QNj>T~E(4NTxiW9a3c0^ZZfCH.^3#b;IGLP ');
define('NONCE_SALT',       '.-(*887$>L3b/,)YH~~U<{_)`m7H|dO{ACT}tV/J,VQ;X)uFn5UmE[J-2;SEsppx');

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
