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
define('DB_NAME', 'donutby');

/** MySQL database username */
define('DB_USER', 'emmman');

/** MySQL database password */
define('DB_PASSWORD', 'p@ssw0rd1');

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
define('AUTH_KEY',         '8WEXB(8vU6FRRQ)A+hESg3$CA:j38G0.pkY9up>irheF[2iPx(#X-%3?u-o8;(V1');
define('SECURE_AUTH_KEY',  '`r1K(+qf%j}Gq:xj?Qm28/)mW_RL9}s@Gh-Ff)g> `|D@k`B>;_.7>XV;_onX)O:');
define('LOGGED_IN_KEY',    'ghNulAGg2*V4%$ZI_#D /%J-,D+:6n%$:}Bjg9_{BZbw@3r {@#H6R+HM{_3`rlB');
define('NONCE_KEY',        'vCxBaab@h/5$ip<JZd1A^^&+#J/YZCdrP%g,f!IJ!3R66noSjDHRQ@+<ZNmt|]]D');
define('AUTH_SALT',        'yUnLo$6V%Q!1y@y{(E)x0^q@1jD=KK(5S*85}SRa.# }+$vG%R:KJMStbVKa`2Lk');
define('SECURE_AUTH_SALT', 'NF$6hC}ca+m/Vm<kXrUf@kzoNY/cAxp^segJkrF92}%N3YI gP9}>o9hrT(U-09?');
define('LOGGED_IN_SALT',   '&-Bf.2wkL)W ,DVRC *93C#w,FGB-QE9<`QA5VkwFt=jos;~FWQ9#>jyj[B77},+');
define('NONCE_SALT',       'f!Z lF?eIAEv:M&d:E{@0U%8PXfq<%yPQy#{~u/*raI:o!eP(@rnbCU{H0;#imJ+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'db_';

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
