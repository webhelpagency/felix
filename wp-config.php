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
define( 'DB_NAME', 'felix_homes_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J#E_=ly{1wX@LE4B}u%ZNeStup1a^g~,~]9(TmT(alr]U<MtHu)vv NPVxqu/;kl' );
define( 'SECURE_AUTH_KEY',  'Q Lu<6_B85u rYuIq{iSaz1a9xN K^@:YB*_pitK l;=KD>L26uW%1R]fyHLo7Kr' );
define( 'LOGGED_IN_KEY',    '>2g=A ~kvlWwok(~G#sJyqp/UQ*DMVm?H2F~P[8zZ;3,9#mq_VYLnab3b}S1GUN|' );
define( 'NONCE_KEY',        'E5G$4HN> 3^Z=8;}!h{d1AwI]Hh=pCTNK-G?7yv9L7ILK^zd=n9DD@H*nvie6rsJ' );
define( 'AUTH_SALT',        '+]~]9ctY)xI]m<Gk1s+s&U;wyN;BYfml<uHm8p1i[MQK*2@7j<RfCSx_Yx.G?YS%' );
define( 'SECURE_AUTH_SALT', 'd2+jUU+H/TDsU)84_)]?;Raw|z]oZ`A()2-@r&s6/>uq6?Bh|cfSJ vc.aAKeo%v' );
define( 'LOGGED_IN_SALT',   'G`Y}7w}D>nI@V-N)y-UyFT9CH(UZo;s<UvG75}X,/wK1;W2&W6n#|V~?mB,EFFWh' );
define( 'NONCE_SALT',       'tRM&M7mujr=ce(C$j+gxO!=Rt.$N2KLVzh_?]YB&(?UmL*.vK~>W8!s_T9{.,Ka,' );

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
