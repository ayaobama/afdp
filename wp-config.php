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
define( 'DB_NAME', 'afdp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'B/7z2K)VSlQu:2DVZUYd,YXhPhSWeL51Es9_Bjf/m6tdL*h1,Ufa^*J,>@]0#Dy-' );
define( 'SECURE_AUTH_KEY',  '-`T*VmAtB<sLU.U%dF_Ma%FB*6;v4{%!80Db]PXdZZK]*8;gsP7.N##tZWp@l Dy' );
define( 'LOGGED_IN_KEY',    '1rxT=U+b=Y$Q3c=#6$QBYUSfj*7:r%AKQ76y]/]th7+/pMY rXMY0FMv.syttX4i' );
define( 'NONCE_KEY',        'GU>nmU6h&|e)RBt+Dsgm}Cm~$Er_1yk;e.+Vu?0oJ#hfm7LTd`^B{~?UHPfRT#0r' );
define( 'AUTH_SALT',        'M,BzS1z+BR?,o1M**#x%7w5<)hq~,NIp/cdJ<LAzY^)BH)=N/NNlb#.?&StZ_~h#' );
define( 'SECURE_AUTH_SALT', '[u4Zzu=K!wqgn:Rc@*-9x`A(67W6_[qh`SAhN#JvHwC1(AF7me)/v3,+CApCQl>~' );
define( 'LOGGED_IN_SALT',   'BlS<gSV3%zZN*j^J3iXOt$buRYx#3*cCf_=|@uLw{xpDG1o,yq:vW^W8II<vwkK#' );
define( 'NONCE_SALT',       'mMSi8|FOfO ebN#9|s.ak7l@wcJp]!FARj@B+)M=@C{zjud/Pv4)[1?^de>]whzf' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
