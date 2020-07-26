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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpbs-clone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '50+*Y:*}-7>aAtUm`r*3E<UZ[95bp>fe{,vZilMw:oY:=T|0YY $kAQ+<0MsNh8p');
define('SECURE_AUTH_KEY',  'rM+HN|V!mSg2Rg-Lo:Rx3t}}[2!Dc$9t;g;[HrEm`JSi*uX#oi^R R tYwy]rZRo');
define('LOGGED_IN_KEY',    '[~Ue[uu 6+91:N/{cWwAp.rLgN^wvTawdIBM!aQS2EQve8MSIg`b5hx }s>Gf|ve');
define('NONCE_KEY',        'd6Uv X* AtD<YXF[* `p~)K*%P=D+uO5?/{%s_`Z@=j$NnMVcS +N99+&B@yum;=');
define('AUTH_SALT',        '+KsZ_.V+=agv~7-r;S6e~:Je;1wJ$AldUQ:(?9[*|WX;8hA$+w3sxwM6+,$>|RVT');
define('SECURE_AUTH_SALT', 'Q^*iCA(||TULMJXN(GP>Oin38y6d:V<Fjt-(-orN #U9IY:7`DGH gT-E` %JSep');
define('LOGGED_IN_SALT',   'D_6<Kx*_[Aelz.&?qV2VY!>2Adyf`+ eTET_]|b[=8qEOkp[RE)-+N/7=+-xdIhR');
define('NONCE_SALT',       'G8D3]Bs#epKG^*!{7||(/1.&p.[@?,b-$_&}iE=GogA-l6W8Oc#UJr?$yA1-vcc-');


@ini_set('upload_max_size' , '1000M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/*
hosting credentials
-----------------------------
http://host.webential.co.uk/
username :  bolt
password :  Salmanbolt
*/

define( 'SMTP_HOST',   'mail.fabtex-apparel.com');    // The hostname of the mail server
define( 'SMTP_USER',   'salman@fabtex-apparel.com');    // Username to use for SMTP authentication
define( 'SMTP_PASS',   'lZ8;fR!H37a&' );


define( 'SMTP_FROM',   'salman@fabtex-apparel.com'); // SMTP From email address
define( 'SMTP_NAME',   'BOLT EMAIL TESTING');    // SMTP From name
define( 'SMTP_PORT',   '587' );                  // SMTP port number - likely to be 25, 465 or 587
define( 'SMTP_SECURE', 'tls' );                 // Encryption system to use - ssl or tls
define( 'SMTP_AUTH',    true );                 // Use SMTP authentication (true|false)
define( 'SMTP_DEBUG',   0 );

define( 'MAIL_TO_ADDRESS',   'salmaniz.82@gmail.com' );
define( 'MAIL_TO_NAME',   'SALMAN AHMED' );

/*
web url
http://bolt.webential.live/

wordpress credentials
---------------------------
username :  Bolt
password :  WebBolt

*/


/*
local credentials
salman
123456
salmaniz.82@gmail.com
 * */



