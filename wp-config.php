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
define( 'DB_NAME', 'egelja' );

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
define( 'AUTH_KEY',         'MO/`aikA*?Q-Zv)I7{_o3#cls^kS.2wwB:Zd?hfe#|Cac-@-U_q YRYWImbpk2;P' );
define( 'SECURE_AUTH_KEY',  '(]&^eq/?~O<i2doB,793>7u&ifTeb8z>,0tUj5i&G|FN0^~SX+uvfHo0yPX6gG42' );
define( 'LOGGED_IN_KEY',    'hf$a$Yy!ClldoyM)?oppFB%xoU:1,.d2Ll]7I9Ks,PqMcm7+JyJPFtyIt?zneawD' );
define( 'NONCE_KEY',        '9{C)t35Sa/HTUDGOvd$Bpx|_PkW7ho^qxIwBw3ZaDtP=7@wF0qlcZ5p4$4WSZ@BU' );
define( 'AUTH_SALT',        'P30GQ<g3%#te:b[ws/&vAk}Q$34/MF,//7x@A9~Pfg6`tvx-$y|>k{Aw?9I@qX2F' );
define( 'SECURE_AUTH_SALT', '2=fjAV/{x-pyC-SRe~Ts<rk,)H Z*S[Z~0F66JVYj<C^f+ HDnw*&aRh 8KyW!nM' );
define( 'LOGGED_IN_SALT',   '-Gc.;<(OzMeUx:y>Bsw6-lk)=; ?BDiv3 n_it64/{t]A,(zIMWS/hsVO}U GD)n' );
define( 'NONCE_SALT',       '?=q?0>aihTqxXAOq[|ZiA)TQY%&,`GSJQVPyrK1JQuN2RT]*fr`Q{l{DA}i[4C^6' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
