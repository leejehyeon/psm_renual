<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ancle');

/** MySQL database username */
define('DB_USER', 'ancle');

/** MySQL database password */
define('DB_PASSWORD', 'dkdzmf');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '<6AQ9+!_}8t}!k3f/Q1M{fj{Kjg(cNO*f,]LM__rkY<)=UdzK#7fsl7-o/c3<8%d');
define('SECURE_AUTH_KEY',  '2O60V[_.e(:I`iSw(Av93mR!SXfauqUL1S;3RhZsGU,}|l>Lby^ECC0PzNWlxcW<');
define('LOGGED_IN_KEY',    '#NWJ<r-c.jEAkj&yo>}+)c`bXQQ@(_4]jV@L9A16+{i1b3duV^]~<<j-Q*qE,>h]');
define('NONCE_KEY',        '<X3tww#|AFz>A1W )r,F7S(YCce4S%!>,+i=)H7c+.|f_I*d[i%GSwGvK8P?K7T1');
define('AUTH_SALT',        't3{M0dUZ_{bAbv`V},8M3*9E0_G/k$$CM- jQf%CBqpiPGz|4+`jmVHs#n>5gh!d');
define('SECURE_AUTH_SALT', 'B[Yq??QF&ZXn]+SF]*w2dt4&v$M+rk4c|+mM=Af;td{f?|gTG})d5FU4O.C*vb?:');
define('LOGGED_IN_SALT',   ';R%X/zg:<3V W=]&w>7<]/KO~wo;)SBqw9T@:7yk>j!5u?6E5qaP&]H7o:G.^@{T');
define('NONCE_SALT',       'QW+hw=6>Y,^|3MuRObj%1SD8n]|d1l|eOKm:v>dQk2ufGO;C-nKck7(1AZ$mw*Df');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
