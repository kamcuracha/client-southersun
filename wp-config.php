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
define('DB_NAME', 'db_southernsun');

/** MySQL database username */
define('DB_USER', 'ad_lightmedia');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'VV7S5@/[sh{1!kja<]gM!0zH4%is_Y,kSilf}yMl :KrO)NF7OBWA|y{@kg;OeO@');
define('SECURE_AUTH_KEY',  '~de`0;X1ynbXc_pgcDHg?/kHE7ej.#C<yk$6 QRqP51~cl |QaX4CYaA6MJx/Gg>');
define('LOGGED_IN_KEY',    'iw[n:jtr|dbG>ABD(*OsR_7,44M5#cx^7}t,HoC[r.1dTxVn892C{IV5~ekMNsD6');
define('NONCE_KEY',        '_:>mmEM[;!-NqLqRE4t@9##lWMp0vep+ijqws@]P@bmk&[6I9Jq=/&Nl3@ud2TiN');
define('AUTH_SALT',        '>}2*.&np3`8 |s$}3*ovQ[}H^=7d{6>`51_xwyjJ)m9Gm75v (?pCcxGPh->,w8q');
define('SECURE_AUTH_SALT', '89huVR#hjf4uf4beb(!+:#0*)QII(OBNNVkW+nj_bKC#<XAg4p7W2D/[vbKZY<aA');
define('LOGGED_IN_SALT',   '&);i#aMDaxu7EC[EFBJSQ^UNYN!O7JAP|ok!#0ihs!=WaX4y,Uy]M-?3Z~Q4sWH1');
define('NONCE_SALT',       'o3^SM)lkv2l4xxtm^3)B(H,y5o&4`FLsgr<PoWS~alAkeo:T&`Zo0vXRyPP;WhEF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpssf_';

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
