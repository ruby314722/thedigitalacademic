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
define('DB_NAME', 'thedigitalacademic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'fou84cault');

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
define('AUTH_KEY',         'y%Hm=RxByS;8ungH+ p^Q8`I|gZ@9Qu%NkJ@eIG}JzQi+=M`/N#E8&R2c`?ol~Dz');
define('SECURE_AUTH_KEY',  '|4k]$]9/4MKc6$9 -^:-?gs&gl,&Kf0026W0?Hq2+Vd-ZC?jx%eI!rnP>iWT=]=u');
define('LOGGED_IN_KEY',    'T+)`]SB8/]wVejgLt>bJPfVp$?e]r)6T;l}lBH9&#Pa)es`)zPU&(d3R/i6;&a%$');
define('NONCE_KEY',        '^Hr1OrjiDi9FO[L_:uH_EX[jEDx6vPg$DB5^:9$q2[2.u^<#fqC?1ZV<SLJiD8xa');
define('AUTH_SALT',        '34auw+R7cKF7Vi+h3+([y}dUi~e,uOq _X4Bx997|_YZDGL|]X d&@29L(TB:_-^');
define('SECURE_AUTH_SALT', '6kX_f}[jnxyTN~Aa~mX)zp0Oe#i)Hu:HzlhEu0/_4aIs)wZ==`O;_rud/LwJKnmh');
define('LOGGED_IN_SALT',   '`{:H<%X)Xj1Zu)T@Q`S}NSUNT8{k4(lvBI*.+F nRU^[a|i`eZj+Ex?1?d+eWbkF');
define('NONCE_SALT',       '}U0DE$dSVTpw?x*-79_EH;>Z_eY`pN% dzUik#/i*LNyZo_)P:-1e `=n{*3>2e-');

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
