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
define( 'DB_NAME', 'icgetei2021' );

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
define( 'AUTH_KEY',         ']xEG_I+19wDm)#jP0Py0VBE3ja9c|,qe<xzL{I$8(w&T`d^F5GbXee1NyPk>,9O*' );
define( 'SECURE_AUTH_KEY',  '7:lQ3)~:~}y!s+Z*w,ZNRW}&:}EBWkyBb{]OxlgT6NEZ+b$L1T#,fIiE1P{MC0PP' );
define( 'LOGGED_IN_KEY',    'MS>ZpfTdGpW8UVc4A!E -`[;cv$6@!/SuNy1%e?YQRJ -}?CK$Onx3:/mM>e_+/5' );
define( 'NONCE_KEY',        ';wupMyaNqL@{>bi6IILR*QO53Q%s~c):O {#Nq^b[* L}yBdJ!:hGqA?,kC9d<Ib' );
define( 'AUTH_SALT',        '3ACdfFK:V*.hiA2Wve=W:}31C*Yr[E:M*>95:M(tw+d4[hO#~|d~Cx?53z^QSp*u' );
define( 'SECURE_AUTH_SALT', ' (o3uhYY9Wn]MP}/OYJ&Hbf uU/c!{ {-V2-mwY1Cd;b4;C6uwg|KqO)<7jfVY=z' );
define( 'LOGGED_IN_SALT',   'CU:}|nTK)O6)$/=}#yra^v)5Y~BP%wuupSr:k*O>+-l|dxC[VjzQh1#@myj>NbsA' );
define( 'NONCE_SALT',       '}UG,nWNbXb:`8Me[79 5H($~VGs:0TtJ?Jj/6xKU.`yq-jjuJCpVA^O1v|~5uKNL' );

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
