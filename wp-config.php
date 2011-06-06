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
define('DB_NAME', 'lateca_real');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',R8fN-}my/*6s|`;*PSIX5fWE!(9 y3/Q)VSJIQz$eH$6E82]mI>=a2Tg_71!/jm');
define('SECURE_AUTH_KEY',  '#>$/nKlKka]B7J3JS~)y%x7e%qbVtt2 0N~-9*K:DD2(SZH^> C{o8&[XnPl3l*`');
define('LOGGED_IN_KEY',    'gw>V%IO[p*v&ETy2k7Jo<&j;DnuKDA.nC}%@Eu)R)#>;gT$}2}G7~Y[}WkLSulhM');
define('NONCE_KEY',        'Glx[!)ToGwFJwQa%Qlpo^[g_OgyeZYkh0N11lp9u=3)HL3Wzz67))d0yx>Bz E4&');
define('AUTH_SALT',        '38,MZZ9iuM~$x,hnwG[}&-4et2C[,DnuSK=`Wyci85&2@X/zzH05lZ={+.5b`=0q');
define('SECURE_AUTH_SALT', '.d{Dkd8y:u8;cC>:0&M6BSY&?<_h:;ZB7TB?c?teNr2f6sn7KIaAaE7.>m#Ir3FF');
define('LOGGED_IN_SALT',   ',_jpX42Gw,CNQr7KL[4ou7aGXW UO/py]t5/2ep^@QI8,VV-1G?1fr0D6+J#?P&?');
define('NONCE_SALT',       '9NfG!g0@`B@Da<t[12Zj(P(+$#OSKP@E[ TB j-J]F`z|%96GtKyVfHkDBo2W-ry');

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
