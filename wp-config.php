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
define( 'DB_NAME', 'wordpress-porto' );

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
define( 'AUTH_KEY',         'Q-`$(ndpe,Jd%l-bL%8Ros|:@^|veZHsv;iC-_sPR-(M&6n_:x[%*NaW1-K6%&Xq' );
define( 'SECURE_AUTH_KEY',  '~K[I,o-ez,or&pcP=JEVuK n:MrXzu4_]wW-5$N}+y[vn&H9uw$lXlzg!Nv)pA+J' );
define( 'LOGGED_IN_KEY',    'G`>{X jlVJkX7jJ|!PUD-VC|ij2`wuhHb2J?`sapd*Mq0RDXx]ZC^hwlh`b;2$X$' );
define( 'NONCE_KEY',        'J])[7{}KC-KRwe$d[k`:;99[2UXk3**kl6/R(M(XJ}Cfi?no.bwdTN r14j}NylT' );
define( 'AUTH_SALT',        'gi!UF`uY!oC%U7Ua1y5+vOxV[>5M0lv(EuGD_2LN?k6*`E;<zs-r7RbzPE2>^du0' );
define( 'SECURE_AUTH_SALT', 'VPohyf/h7S$9^X Pfp:I]PApG(Df7%|5t&0-],v+kE:l<zRd7>j91!x(&sPJ)X_0' );
define( 'LOGGED_IN_SALT',   'Z^+q6yn+%~T_TajW;,-V*OMx40FS<)-b_DCv=G]Y=>wt% Aw;>{0x/h$/jFcuPP&' );
define( 'NONCE_SALT',       'q;>ay3ZVHqIKZ23 qa)cyPhJ?6%[9`yxBbq$1jxIxV~p Ge=o%{+TdCl5~z`v#a*' );

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
