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
define('DB_NAME', 'magiamgia');

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
define('AUTH_KEY',         '<1d$vX]_S#0$rxDnn7Tv8kc#}Tf?f@;HHX>-4]&,+C6;u+:CEBmRbxm)D#]5!Bw.');
define('SECURE_AUTH_KEY',  'G4fN7ol>5NerNA+T.X)&>s^$~Ua`O%.a{y$ISY$h<O.LMB`d[}& =EGKb^~]^7@e');
define('LOGGED_IN_KEY',    'ION5uYe_rOJxGcd*fU?_1>:J78JY<~5O9f`B{K%^uksr)|A]}J*3lxHmVP9G,THm');
define('NONCE_KEY',        '~;_Az&4A<zJCL.eZ/3[ack.>z8@OD0QA~}_&TS4qJwAR2P<DjE1FvuW@AxrBoyoS');
define('AUTH_SALT',        'lK-d(^P=UU.FSpa6:.^&KT3s/R8.tEyywBI gqfgyVOG]>zmY[SD:_~+?fWrQQQ&');
define('SECURE_AUTH_SALT', '&B,%:9t%161/~(S6X5kEmS5zl/AWW@i!z.Bwh1Fi}4[q6FGJ ga{JA$U|^]D{xs*');
define('LOGGED_IN_SALT',   '4G=2}msg++;g~yLN&5NGq#W@kSa-6[WvC `UY0jqR#&I#+:l[.0Pi|e)t^9Z5:bF');
define('NONCE_SALT',       'bN6yB.LJ#2z:G]p=H&-#t;XQR86JOzRu!?s<1Qg0G1>jhVEfLRzpwU;N<([E%{Lz');

define( 'WP_AUTO_UPDATE_CORE', false );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vp_';

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
