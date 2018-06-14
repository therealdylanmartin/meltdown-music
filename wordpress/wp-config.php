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
define('AUTH_KEY',         'yytqWs#[$|o}B{g$>;YCm@n%G)[i|BeB FWY<<srJ/,5aj09WK9gvp.?5 X,60m_');
define('SECURE_AUTH_KEY',  'ZRfu_,3[VP<1._U|j2%6;|(GS:LU7NlRKqrGSz;dJ>bm:elS~v_y((85:Rbj]_.!');
define('LOGGED_IN_KEY',    'rKL#.,DkAtZGKbT@W?M6uKVBP#>&{B_jF{)qe*U3)$J{%fSh<a>O{,2Qh.PE}^|#');
define('NONCE_KEY',        'S#=-f>L0j58&vF}%Y]j<dulpVU[*xlS3V]9CbQ%u=|-Q_^va<OJBloGXGR[JyesS');
define('AUTH_SALT',        'v4xaf} =UG=l/I,oHi+_Z?vqTEfqO>RXt1]hiU (Mg-K%{ 90!7ly,>qcheQ+yrw');
define('SECURE_AUTH_SALT', '~rSI+XV`O5O7_`lNJxPwf44u>CAIVlee!F)EpFYaJ 8YN5aqA:7w%?Pq%_ez-NUj');
define('LOGGED_IN_SALT',   'Dh)]s/Tw}CmbJjQ&L$ECteeVWk3q^~6hljfI%vtNel)h`x0D)8hO]wMSRb!ZU`#n');
define('NONCE_SALT',       '7nZqe2gEYZG^2HKlw9h]r1)GbmIRkL`Xt^A^2c-6nt43F#mN=p-[H]KdI{tKvHAM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qzfmd_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);