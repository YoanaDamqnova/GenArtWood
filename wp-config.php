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
define('DB_NAME', 'genartwood_db');

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
define('AUTH_KEY',         '&xlF(bV8Vnf;u=b9c5_o4rC[zxP/9SIvB=$MRZOC:flOld7/:W{d~=as1k!?%j?R');
define('SECURE_AUTH_KEY',  'WPELp(&t$Q)+2>j:6D{Ij2/k80&uF%?Hd[-nt:_<uS%[cGfz-r%O-7E#SH}OLwn`');
define('LOGGED_IN_KEY',    '/{0PQ/QsoX,#HnQ+S? = :&c%x&vlGXn(|SePfFqLIS~YPH_he]Xmp[^awAw+tkh');
define('NONCE_KEY',        ';Lzo{c78D{ 2x47PO1Q5 6;jfD47YQ({/gbj$6CQB>&FEKf)E)-W37%J3}#UzK/Z');
define('AUTH_SALT',        'Rc26 `XufpSKn2n&M $6q-||AuC2-`y@[rr]y/^XM!Mfc8x03|#IB}t)4C/n<pjz');
define('SECURE_AUTH_SALT', '&]*[xq3Q^vGD.xS%dD}=-l,Ubd#$CT+XBm(6jxvL~HRSv8g/HC#8Mb]Sy,d[ e*h');
define('LOGGED_IN_SALT',   ':lJxrfU) ?R%j(2(W`9AH|SUP]_an2{RYuUalh+1j`7}ULoUh)Vv<-f)1N<VxAVS');
define('NONCE_SALT',       '223jB*y0bmKqs<fhc:{^si%K:P,K2_3q_}2j&c s  v29@:Ly!$KD5=|{0|=qaC}');

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
