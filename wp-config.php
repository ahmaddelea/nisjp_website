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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'ignv){/}MI3a%}4{txgz$bLQg6S:zn/Pwda0_RR}nA&@Fu7+XISRe=]8/6]24iW{' );
define( 'SECURE_AUTH_KEY',  'u!G9FVhButk1-5xUH{,r2 J4mZ,>6LVE&23:H{j^^c _k@1&%.G}4+z?mXWIuh;4' );
define( 'LOGGED_IN_KEY',    'h6=$OgK!b<.e~)H@^&p7$TJ}W9;PATHx.[CRu:>lSp:YiZ=ygQ*uYyd0?RR(ZhlG' );
define( 'NONCE_KEY',        ' .@+s,Zg+}i%=Fm)G~t5A]kaYBsluhpu8#yc@VCV$of8}}nvX u)]f~swd.|p;k(' );
define( 'AUTH_SALT',        '-wq>|w_kdp{Mhkt4^R=vKS8X(4)^=M_O]0*$(v]Mkc=XE-q=m<=q(s|g=pe<.v74' );
define( 'SECURE_AUTH_SALT', 'c:<s`Q_MS<i&6m[8mN`)a.3/U3P|n$rLG1eotN4ElSD**A%AFEVHEY/F%`1*!fZp' );
define( 'LOGGED_IN_SALT',   '_8<^n/WBM5shtvr:z:XS?f|YL0EKM{5#OkKYI6Z~JC.(8UgwB6IUYS;ni{TPdXoe' );
define( 'NONCE_SALT',       '`Lmj#Hp!=pm5s~YFq#uI4`W &reJ/<6OVOlLnW,xE%l.r!u.n&x%7Luk[v6hH_&W' );

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
