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
define( 'DB_NAME', 'colabelectronica' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '}XqM|<1nR[/vkJYI[>0RL_/qickps|V TsX3jN.OH|WrT~Nt7y/XL({y&HJ1mF]r' );
define( 'SECURE_AUTH_KEY',  'vb<TLiz~VCh%vngEirW=J=:/:-2BPAcoC Y@/%v$cmCF[`yHTk#@OCM=US4d;=DY' );
define( 'LOGGED_IN_KEY',    '`5ZM};H.)Ul:ywx:wWBYhyGoPB&Z+ho[*Kt<I4q([ &sv~3jD?5SnBNx)5e2O_WO' );
define( 'NONCE_KEY',        'Qw{9;LXy@$jYr9ofYyd8.xH*B0jbQdd1Qa*@nQOE` |;m!3BRYG$K1_TZ+wK5;Fn' );
define( 'AUTH_SALT',        '<#aQ!$@ZeZOW|=V$mAfsG$E];2P#uwK;`|j@[u1[BGN7{uhWcH#9qPIL~^op!)^9' );
define( 'SECURE_AUTH_SALT', 'MM^*{u(*`mv9(ckwMuA*^j;mc,bwkzoV#&J`({H3JQ0{LUmDQ.xknxtFXGMx:@G$' );
define( 'LOGGED_IN_SALT',   'HP[:3V#`nnP k,8_&iXSR_7}}z;bTo Ep.ddHQPp=n*Jv60BW<SX1{_Adl21-Zj|' );
define( 'NONCE_SALT',       '>hCKl{CEg3.*mUCA}vx97BiqJVYWd)M9WQ7H4ktvo0l, ->+xPJbB_gP;b#[tTab' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
