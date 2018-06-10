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
define('DB_NAME', 'meltdown-music_db');

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
define('AUTH_KEY',         ':C8SQp |@dLILx<[2x%P(Q|1bW%zh-;}hMvNcFTO[6O9A2 yBKBdem1A_Bpu <cm');
define('SECURE_AUTH_KEY',  'o9ZKPP_Dswt@/PsxJR0M kSV`/{z;iIP(>:0q?~p1P z~<<w5hQr@Zme:&D}Kr#Y');
define('LOGGED_IN_KEY',    ']PY[1%f{wnJ.@Zw%oqb=q {%+*}?JIyMihhFPd2<}!ccdO|JiCN.Ta(!153Bq_ay');
define('NONCE_KEY',        ':g2wseQ?%id<t`ws`HjKn~3=`itt d ^;4}C+x`5G8r1Il=)@](.o3p^li=DQd|?');
define('AUTH_SALT',        'xPjlyKoFtLke}`dY={i>xe@ 9fJ,v{&osx2&=_W-JdBo)rwKF->kFeZs!Ex1hG.q');
define('SECURE_AUTH_SALT', '_Vp,j}5 [?QThJ<(R&|hXwY=ShR<;j ;{}DT/D<=)piz^7L,BDj@y)WrX^J;U|?:');
define('LOGGED_IN_SALT',   'W[_.KlR;M}8E9}He|ps/?mLoE5xUuw5($]pJKe0|B_F2q98Eb~`vaj1BYjE&$e_v');
define('NONCE_SALT',       'zKj!g*#{M `51 >o9FnEbRr:4pt-eHqaG:h7Fh}`Y?o,ST!g1O&,2+,yu]vR_2ZK');

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
