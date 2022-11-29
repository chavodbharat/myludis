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
define( 'DB_NAME', 'myludis_dev' );

/** Database username */
define( 'DB_USER', 'myludis_dev_user' );

/** Database password */
define( 'DB_PASSWORD', 'r1tac*Y6Kth^K6IJv2ig' );

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
define( 'AUTH_KEY',         ';[;AjaySvKZYjMA{eKfT$]H?1}f1,_w4%miAYiknu8QF]yS{iLw:s2bqi}k{9E$G' );
define( 'SECURE_AUTH_KEY',  '.hbB%kv@w#o~|A_SI;$O<n-A6 |?p?p!&[iAX,OAmfop#EBh)BOV1<LHq^I oyXs' );
define( 'LOGGED_IN_KEY',    'f`o;hLO7ThCVG]udffOO|*d*1%.TW~zVRanK_k+kyYE^8+EA=zB n<p^8f4|;(ed' );
define( 'NONCE_KEY',        'XWdEK;xpSy4.Y>ehf,-:voIxmzH$(T/L3%yqf#nff9]VFwCc~I4pAur|aZla`Crd' );
define( 'AUTH_SALT',        'wjr(~k0?S5:>B`9EHb CzEdx+`N[X2{UrMw` _)9XPtO1!)9IzYbVt^~BT!;4I#>' );
define( 'SECURE_AUTH_SALT', '{)[:<v pLtTK{`I7o%1WFfJV*NsdTq*l:o.6`3(o{_zZs1`6+9O?&_`~N,aV!f9u' );
define( 'LOGGED_IN_SALT',   '-Hq^kHEML5$PP=4~:T9)0IqQ_OKj0,f`I5Zs`{;$%&8 q[?}=<1ygU{WaC!QMp8/' );
define( 'NONCE_SALT',       '6VQi]UV9:%^6irfN++^51cFAbL!Jx9WH>@9R<kB$P;y0JR<wke1Rwi.?>ICJ2{;a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'myl_';

// $table_prefix = 'wp_';

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

define( 'WP_DEBUG',false);
define('ALLOW_UNFILTERED_UPLOADS', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
