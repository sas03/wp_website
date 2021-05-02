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
//define( 'DB_NAME', 'site_vitrine' );

/** MySQL database username */
//define( 'DB_USER', 'root' );

/** MySQL database password */
//define( 'DB_PASSWORD', '' );

/** MySQL hostname */
//define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
//define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
//define( 'DB_COLLATE', '' );

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'stephanesumo_wpsiteweb');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '152503');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'password');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mysql-stephanesumo.alwaysdata.net');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
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
define( 'AUTH_KEY',         'ILKn|M/tI:8cqpQZ7P%Fg5{e1e],H)yQ_`R=?xtq_4X=0stkXV1MFuOj}05:$.8<' );
define( 'SECURE_AUTH_KEY',  '?3yLW3`nCoM-ifQR8N{J$c_SHGsKv0!xC)>c/JJ`/[c2xH$hx$@/!8_fiN`{56Ns' );
define( 'LOGGED_IN_KEY',    '!oj5;i*`3re0p Cl`@$iW{Iuas>v|V^Wq*_!lyA?OA.ZNCd<bFIP.2VQkO !e3VL' );
define( 'NONCE_KEY',        'McJW5,oU`)(,1ZN|!o?/~N;e,5bEvs+cM4[MwA G6eR`(1GOf,,6rpw>0.,@2O`.' );
define( 'AUTH_SALT',        '*`*IpKSWX(V;xW2u@f;Q5$`WoIy$tC/e.8y@_ghkRKm1>+L3,WmD7]fm*9q$R2Kc' );
define( 'SECURE_AUTH_SALT', 'JuLQ?>/:Q|(nLWJ>Gw0JjJDI1z&TB7k1&98P}x+}MP8xEDSReg+uXhMwiPcU[<q`' );
define( 'LOGGED_IN_SALT',   'Fm)2C-k/}4ed_gbJpYhi+j^%5{}Aym/#IEAM`B|xF.!T,!Lve4U%)K s1)/q^sl}' );
define( 'NONCE_SALT',       'zemAaZtpKb|$(pmP99IU,zcP&UqF}Fro)*N?71>OW!|@X?G%o]+HC<]I(|#rB,R+' );

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
