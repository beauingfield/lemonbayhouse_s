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
define('AUTH_KEY',         'u3Q4eYjTJ:~wpa_:>HW_+/:NK+jwJTIS2.,+3yLvVyaMBWF-7~8BS95U-KA8GL9.');
define('SECURE_AUTH_KEY',  'u;K(ds!Q:1i7e=u$^O(`i3+Aiwu*g:`L%dyz_onGyLzbiEmP?v)5 -cw[;Db@wf)');
define('LOGGED_IN_KEY',    'GF%K uXu8W1-_pdS|T!sO{uZ-sXMK!&Hi_2uPaWUo=U#`;9M{,4BCT^=v, #i<18');
define('NONCE_KEY',        '3v$Sx[%FcI:pG:8CZ~.M,OG%g{tG/{gt{g(f{<{N_YY<L~;?QH;A=6l4ToufSKbj');
define('AUTH_SALT',        '&pnx#7)nujuEZ$b3j;,N@5pw8OrD#}9>f$+O~(ll7)x~_t`G`s^(*z@`DQmRaEpP');
define('SECURE_AUTH_SALT', '!/Si{/*dO2tntE.74}*0Gwb3bbp.W$JU+!%Jgc|K5=}}V+DVB{+Q=:gBAHWY)|z}');
define('LOGGED_IN_SALT',   '/Y/j{[o(IfE8OzaM16LwW9*BY|aLjGSUJmADM [MrNuf6T<zXho?o;f:q|E[3}_W');
define('NONCE_SALT',       'EN<(ouDdXk@.0r%nNTil~$Wt~`Nx([.~uIKA)G*mMod{+96 NQ%V-e1+IB/JTy{V');

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
