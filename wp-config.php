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
define('DB_NAME', 'branche-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.aTqIQ[AhOod#2>h1nM9F<1%YOb?~8@4*a@RMa-^lOh>cy?D^RI^JEvoGt8Q(+-a');
define('SECURE_AUTH_KEY',  'RvB6Fs2~E}$7Obc77{Z>H7k0>W@ ]EuUY=H{a|l|c90O]]^p4@N@K]J_6;?}t=6x');
define('LOGGED_IN_KEY',    '-Pc^Y|0RsF6(4AH+L&gSPa+c4@$af Zk`/Jq!/dE<=V}X//MU.PNB|-<%/rf)P]n');
define('NONCE_KEY',        '7s?,6KA)~4^cvr.x1d#hhW;y/;=:lpm Cn|W295U=0N|-?X,#m]}1{v!CBLC:W09');
define('AUTH_SALT',        '~/*6,Emz;ttSx|`PNv/s$fE]^aEt25.`7:e$,i3SP7jBPrV^Hc<-QmDEk[)T5|/E');
define('SECURE_AUTH_SALT', '|n3Z=lI7,T|?Jo}:Ngt}|Vp!wx]$n@p7e6]3O {=`{CBu)_)x$MOS=R!0,NKoKPp');
define('LOGGED_IN_SALT',   'rl}))4&#r1JMh-vV@{aL,prZ] Dq)F4;6ANXCN@x0b*sAqG,oeqHB5B<^5:.LnSX');
define('NONCE_SALT',       'BKuTSZUi+,>fu14=Kz$U2YcTWBe/f?K3ySSiXMmX&&S&b=jNfjvd$>B[O4lNvrX>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
