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
define( 'DB_NAME', 'dbwawwgk6nilg2' );

/** MySQL database username */
define( 'DB_USER', 'ubswaf9gnd1xb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zqwrggu0g8id' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '-GM?2mG>ElAJR.t`P!?W dgz$ja[kOsyO8lafjfUpajy<!Xuykk;EFU#B`yP99xa' );
define( 'SECURE_AUTH_KEY',   'ua]:G&.DtIv{:(}Ju%1 ~@ZPV6{`%1eW-eyCX[86O]$(mU;}bA<y#`8%G>jxQrKa' );
define( 'LOGGED_IN_KEY',     'J@qy*xq/^m70*-:X!BXGx=mLe+rj))I42)&tm=?|{o#t}GNyO?dqW7j8@H;Oj!(.' );
define( 'NONCE_KEY',         'V(pv?q!0gdy -5>h+y3cqq>%#2h6q6m01e`OnP}92AtaB>Y0<{}/r#Uj)(-@&U?v' );
define( 'AUTH_SALT',         'D>yo{=#t)CPn~Lqh-Q%C]:=q@~,Wyez$}GH2pCL>/gby2oSlsA^`NPxga_4zXCV6' );
define( 'SECURE_AUTH_SALT',  'uj#<R2uX*w$XH*!)cB3o8%MVIw^q,WYT1xzqn6PC<G)cH*yHmcb7j$K<9q&9?a[/' );
define( 'LOGGED_IN_SALT',    'JV.01V=^lr!oqzce+r1QAt>iC6pv_CDgk_88^y%4K*4l4k%`GEcG=U?lyC74yJb~' );
define( 'NONCE_SALT',        'i_!lN 2.b~_H$O0F~T6<rN=0N :eDh(ol>%ev>tWCJgOe}T|2(4lNM>-aJK_IsiH' );
define( 'WP_CACHE_KEY_SALT', 'o/GRKTA5WVcotpKvmt(66@E`A5?RLiA0mdcAJ;RI5lX$}?Jy^5CQ>,*Cn&A{2,bs' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wyv_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
