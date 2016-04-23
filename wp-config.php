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
define('DB_NAME', 'starapps_web');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'TBm@`(d#vtXN,jOmY$MeQ1[sY{!n!.*r~?=$guV1R{m-Np 1|d903s^!L5*EY{Pt');
define('SECURE_AUTH_KEY',  ')Ky~UcCz7Cu/G#TU;C @))|>1<sWCZ>*#tJjLM^4(DScz7<N/dAm;L!W[I=AuVoS');
define('LOGGED_IN_KEY',    ';F?8Icgm:5O_(9iwJ~g;QW-KSUxJ14>jL;+^ioBvltbTGEnnt*Y]h{gSytc2PPo2');
define('NONCE_KEY',        'mUJt|e)zej)S~na?g?;z16.^o*mayR${lHLVopzw,5Vct;/5ZBv)OqmRW|<3^Tf+');
define('AUTH_SALT',        'w*Q/&rKek;psSn=yx~mAqnz}.oWlE;]*w2@4Y[1,*#053|+:&kaqg)]m2iVeIblz');
define('SECURE_AUTH_SALT', 'U&M D}uyKT042$|;J5@}VYq%2E$>o,P@(E$.{m!ERIn@eE5F,K56C^L<XWs>:Vr*');
define('LOGGED_IN_SALT',   '2Wh[{]`/LIT,n:kJ)jB(Ce_A7sS}@XdF[;cPG-IrMo7bUF@GUA/e<~GBY5o DNEi');
define('NONCE_SALT',       ' (Qq]^hR+tNZmr N=~J;Z-~%7>&T9Ni4Fj;!5XC9^l7+;M&UKq;nJEl*;lHw8=-m');

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
