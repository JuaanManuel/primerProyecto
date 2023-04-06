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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbproyecto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ':_I0A/iokB_K)<JR$#rl]+7RPqg{|=Gs.fqLK<I-Yxn{ 635.;LgZs#(9qXIm{= ' );
define( 'SECURE_AUTH_KEY',  'e_!F)|v){|Kz}y`|uey`9y]p Le(H?h!P)i`|%q&ye^OU)?)$HFiP4n#bxqBT`!-' );
define( 'LOGGED_IN_KEY',    '49y|U9V23r,tyF#NIM1Dn=iM&gX1aP9XBTC:~|K-lSS0,6Y*NO?osqRTJX:c/L>@' );
define( 'NONCE_KEY',        '0<!K9Y1+*|$rs*^6eYcy?+&r/3(6w{W$*vo$4zil|S4@u-eC~p0I8qu!jp2@N8>O' );
define( 'AUTH_SALT',        ';UT9PC5zgj}ors0d1w<h|.cs 9&+n5L2$Uw8rn>?qRGfu],!Z6Y~z={Zb~|O*c#4' );
define( 'SECURE_AUTH_SALT', 'U9#P%tx1(h#LU[@p3 +d,P!FT[J7vE:6W|[+#$B!:x-ABvEeR#}><@c{kWu@aa97' );
define( 'LOGGED_IN_SALT',   'F|%+{/=b<,~=(21zIW %[VN}EG}oMgV>a$h&zG`/$|tRu!wToYG{0Q/A`6aX//PJ' );
define( 'NONCE_SALT',       '{0#;6@)]hIEnadYR0S90f4)}Q$pJ%d7MTWI>IhhATIw4VvPPLy^;MMK$J)Sk -Hc' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
