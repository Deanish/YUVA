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
define('DB_NAME', 'yuva');

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
define('AUTH_KEY',         'LBZ{R){gjbEvx:)Zkt$}u}cf#XtUEQDoIrM3zWmM-psTonXI){<Cy7lBk{oHrE<K');
define('SECURE_AUTH_KEY',  'eY1=VxXGtFa}>z,tm`-&[~FJ|`J[bUK4pM^jBT*.tsO&w-~8n|-?ui^#+0|I]{}?');
define('LOGGED_IN_KEY',    'weOeaB)+^+rthgNX,<L}]2Wv,S19|q{Cj]+-[_AT:<)*WdE_la3W6QA7!x+1>C9-');
define('NONCE_KEY',        'V;0^&J){MNvP|>!DM|PRoS7kCWW{LImIut45nz;`a,>87J{.LR N&^[dZN@=X{,w');
define('AUTH_SALT',        '7?saJG-y*BkO.^f8W5{[Gu[$sp$3ofqe*D9 j,]G!#^G9sPMJd^Uyd+H]K6cAO]$');
define('SECURE_AUTH_SALT', '4GZ;^0x8$-`it&R}fgfS+i+ljI|ok9FN_}v60_;jN-#fp-+Rz x{-J)eNqT;|{uI');
define('LOGGED_IN_SALT',   '#{OzAWgn:Z2!Mtn+Lx5S%0i($I.L([GtQ}s%-j->lSk7@onM^P!<aN7{pAx+k$-d');
define('NONCE_SALT',       ')WMbsp.3%iE>,wUwMMk7Hv,iz|;LBu&(XIJ Zz47n[80~>#6q 3kY cxfw1+**S.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
