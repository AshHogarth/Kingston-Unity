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
define('DB_NAME', 'aiwp_db');
/** MySQL database username */
define('DB_USER', 'wp_user');
/** MySQL database password */
define('DB_PASSWORD', 'ce5Beid3qu');
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
define('AUTH_KEY',         '3?+FjshjzM392>>e3~--&z_+QE;NwJCFhq0L7>%A(i^:SJh|J;tmZyAZOYbuY8@V');
define('SECURE_AUTH_KEY',  'i(L[;c8@8jtVD4C+4 t52crR3vlxCG^tF$$t}gZ@-bp~>iH2yz2${jijp3:#=?.%');
define('LOGGED_IN_KEY',    'E*Nft%=q=e}dEJzvM33]bp)$koI1ZEI$D=~MzD<d+x+2+0pf;40$Cz[pZ,ML-Ge^');
define('NONCE_KEY',        ']q$;07Fa<RJK?V-M`|u`:jDk$4b^+pdV|ZZrq }hpG>|d|6E4WAOovc&OHEdY)tt');
define('AUTH_SALT',        'qTr&q3mc|_Z0-yzeAU|3ffo3&Wcmv&K8)sfhs(Y(qbu2Ni|wG${2IOxas=dbZ`YM');
define('SECURE_AUTH_SALT', '#M4O*tV5,:]?+2`Sw1a1.@E-Q.4+ 6ja7beV+/h$p4LD/-2-nnD?0m#Pg%c(MCy#');
define('LOGGED_IN_SALT',   '7~,c{+]?}p-$B<.;<nr2QB,Xa!;-XV?,$T{A$@Wl/K]a,>^m![#tCxn4Y1m,@,K*');
define('NONCE_SALT',       't5(&?PdcRd,DJE@G#3O.[wW+C{5i<~JZN|{%D[v7UtjGubBj}z_Gw8jNIvpn|>v(');
/**#@-*/
/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'ai_wp_';
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
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
