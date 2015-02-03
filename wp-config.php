<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wysss');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'u:|+CK=jH*-v*w9ViYNRG8xT%yDz+B_@O0=k*+h;8;8FV_u0yu~x+3+hT*Dkq#20');
define('SECURE_AUTH_KEY',  '0Jf9HJwmD08|sis_{Yq*.-YAZ!>C?0x<+wd.ZlVI59uvu/$&Mu9lOu[=vr9*-,1m');
define('LOGGED_IN_KEY',    '1 u{B{AN!u(<JJFC4Z8<:e;L!e~4}wpcy`x-j~&:Uk*))n|tZr5Nialb#eWzB57w');
define('NONCE_KEY',        '4][M::ywJl[*mntim<wa!^SKb:a#bVIvBu0up1fLkDK$sJR=KAwPCb7hvJ $r@]L');
define('AUTH_SALT',        'F+LRm&+N.^YRor7.Dz+}1B|<:f= R]+()NY<fK{|/fMmJ4QLqV9`_g7-`3#TT~z(');
define('SECURE_AUTH_SALT', ' ul<-z5=tcfnKjgWg1fw#qU,/q!B$G7A9s+2I<CyDa*CZl;Z-IEbEvoK}G+nj6>D');
define('LOGGED_IN_SALT',   '+{yA]]4S~YOP~OGPQGkCW`kf,X:|LnftmmK &n;LI1pV-]f?t5[)UM4]fm#(>+G6');
define('NONCE_SALT',       'Kk{IIBK9kpqA~hG:>!dz:2W&-N-HqH:f%W5-M$0LRF$l(18&oA @f(5g@#|s8nwd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wysss_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
