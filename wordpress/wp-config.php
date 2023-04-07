<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lks22_module_cms');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W[|!O%Gc8xoi%@T)0)|*1aG<Mz>=2iR{n&WI4zOt_Ka*IU;_B0$yeHpO%+BoJ{=U');
define('SECURE_AUTH_KEY',  'VX9s_;<r(T/;B04KX-^,belr~i5g/]P^0/?z_dK9jgMr$hj05Gw[B,>~T,k-&/k;');
define('LOGGED_IN_KEY',    'J8N2YhmPa.9b<f_K;V?V1[1F+Q9_u.8OOmlb,?#N/F 5vml.)kH:bVARD]6,/CQi');
define('NONCE_KEY',        '+0K2DBxIoR-FCPln:&!rc9gA.r5%M2GRzo* e~`%$AGW,yc.!Rq^wSV~}K:G/< .');
define('AUTH_SALT',        '@r5b/n$ZG~PPr*/@dRvCdc-*%EaJ#S*}:,0@XYE%MI<bg[oc0jaEf:,-*.Zv]VEO');
define('SECURE_AUTH_SALT', '<Ap1EMaQN_B .L~!r`ynbS2`^Wpm<761*QkBn,)^odUb>60%8Dt[9cO@~REnP?yM');
define('LOGGED_IN_SALT',   'M%9^VvzlpT;6$v5%Y*2k/N{6PQU<n2F0%p7yIbZPbzP:Ye1x*4fqt$/,P-c3k}om');
define('NONCE_SALT',       'xhArhgp=~l!!F;sLFyk&/sr~YgFSAPu3%[*eY3U:/M>K%VjU3Wcp} LZmKyQV8A{');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
