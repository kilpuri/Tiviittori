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
define('DB_NAME', 'help');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:81');

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
define('AUTH_KEY',         'P0`Rh/<Ow.s`DW1o0eO5xi(wX=a:Ef!l3[-oQlkjLAiXGJH}sY]8>Cv3Rm4L#Yg%');
define('SECURE_AUTH_KEY',  'rmTB4a!2kiD8VQ>_<=}q)[]2D29}Nx9%C>lC7}4lQMUw7^*10*E;}x]`>]kM(Io8');
define('LOGGED_IN_KEY',    '1}>fKW|r|OcpNH2)2c!Mx:Q.:ttt|!T5V1]{4v-P|XPWWNiE0]8x+M,-T9Fw[FGB');
define('NONCE_KEY',        '&+yf]xNa6ig8hUk3VH;E#S0I[,n4o9xbJSyaRR!~_tRwkQZ6<LA+@.go1*]F0,@E');
define('AUTH_SALT',        'T7B3S,g50!Ti{a1`@laK=d-0`To!uop-n c8Q021_J-9~~Yu;Lm.jq]*SDdU0>;S');
define('SECURE_AUTH_SALT', '}uRv_XkWujf~lqZoX(_zEd5SUE#p?LDxrCl~>8%GJwp!Mv>wXW2*&N`!Uq,-W56C');
define('LOGGED_IN_SALT',   'R[pOv@S7=AfZ{EBCe-K7sQC448@s7c{<C&o~;6o_q{}EFxaOSkaYSK=O#@ $eLBF');
define('NONCE_SALT',       '8n<U!4N(EQSy)Y3$/7D,21q&L@U4/lnA8^IrK`Vo7MQB/~cR^_t5Y>_I)HJa4nRN');

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
