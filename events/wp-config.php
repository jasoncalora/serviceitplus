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
define('DB_NAME', 'sit_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '/b%QXu?9a(7 H^Y>k/IN8z=yHyG1hRuScQ3o$DrqzGmHG+r)q,7I2k)wv&KK]RGq');
define('SECURE_AUTH_KEY',  '@<cCue`[+x*e;(1t?Dr&l,,zwn%W(TxejN/=UXQP)iSoYH3weMe4 SnYxRNDYn>K');
define('LOGGED_IN_KEY',    '.A|eh^K=|I9eYxo<4K*l~`+T=d3(z&a9R|jC/1pjxC(6}$&IwH@&ul+XRw/^n`Lo');
define('NONCE_KEY',        ')sI3F/W%zdlF<S-W/_,%xZ]$1v0i/OEc3Q{cxhJb1z33!2N.~-+vkNcre~yN:9~~');
define('AUTH_SALT',        '1v$;aV~.;c*G^gU,0 2nvi]vc;=74jvVJ[A:]=.cA)I!gQ,`Z,#r9=.O3Ed)G.V>');
define('SECURE_AUTH_SALT', 't5P@a5!deu)a(D;7FNPcnSewy$`?S7.q4oomym1S:xw6=gVNbr5S%4*jN*z:lm19');
define('LOGGED_IN_SALT',   'bp+z$e1gd>)yC+]n{_xu(zprLyOR3#h,Y&3_RRoed>y;[4t!BZ4M(/LH+K|PznrH');
define('NONCE_SALT',       ';N2UEa/xVew1XvQEjV-6N{S!O_Z]|+0A~k6/QFCX&*h=[)qfcmf;givFRhXvR=7j');

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
