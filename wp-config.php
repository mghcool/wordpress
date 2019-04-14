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
define('DB_PASSWORD', 'mgh');

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
define('AUTH_KEY',         ';=v[dB$Qs9]&:,RxH{Od=cG*JJt)1YqADyRReA3>|[+}AAV8Ry#0o/P).ry!mkA2');
define('SECURE_AUTH_KEY',  ' T_@cDrHe-:}?WvyVLkKnI/m (c93ITH91{7aU<Y}~DqV]z#H9|h2{t_#Qf:f a1');
define('LOGGED_IN_KEY',    '18@Zb2QH:&z`f_IyeG6Z[ak.r/C1K]~2{S`.hjm}?)q~/@W4F[sqeXYb1mdD,eWj');
define('NONCE_KEY',        'Z[.VAQ#dTfTPOMX~hC;Y[wg k>94jIlqaoWUaWway(nx<,CRx|AF.)*_bV}&uS76');
define('AUTH_SALT',        'yV|.y4@o}L]cXi$ren8.Az=/qq-ZRF*^xog$f_q5srTXd^]rT>WSrW7>6.9mkWu!');
define('SECURE_AUTH_SALT', 'MoD]=YqY|}}^DLz&#<pTc#,Lu.ExemX@8*}D8!Z~7Qt+231o 1qSm*MS$Q0l?,.h');
define('LOGGED_IN_SALT',   'c;(_@&%tucNWd^?6N/.]~Af>g<-ip* 41f1)q&Vcc_:6{kk=p4L6H0yi2meG4`42');
define('NONCE_SALT',       'f53sh9CWPmw;ec<8T$a{E|GF-v6hByulVp}~-tt!b*.wD,%6,~<c.Sct`:?&84]F');

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

