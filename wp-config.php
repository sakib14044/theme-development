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
define( 'DB_NAME', 'theme_dev' );

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
define( 'AUTH_KEY',         '4_})~KKxu-drrNJL4ZvQq;o0rf]%q>.GY~Ks/t@QN0IrWmR$O0lT>_WVDWR#wG`+' );
define( 'SECURE_AUTH_KEY',  'GN^pCNmON,5|#xoIBp%.i&TjP[Cs0$%<JQFDEm6sth&+y8vBFo,m&ah=tvu%^HzP' );
define( 'LOGGED_IN_KEY',    'LV*MTdn`t#l =VBw&}=~zM.Y&g)~k|!w/OfYIb:yqq07|4/4bF?pL##*R7O`GM=!' );
define( 'NONCE_KEY',        'sNfx;B|<#Qd]}iUn?`AZ{};Djnql|AW=O[2fSv!5Z2mC|3V!vcE^GWjdTPFpvN9I' );
define( 'AUTH_SALT',        '-K]J8&fbH@i6*mH*tKxTM>gwRB oLLxu)GglM}PAcyzv]*21ZRbu$sBK(nH/k5RQ' );
define( 'SECURE_AUTH_SALT', '{+o~g`D+KK h/Ro^ =7(8_Y^=d{gX`[8OW+>^K}Qv)~h}dS+9BaugF{#&7_nd!o ' );
define( 'LOGGED_IN_SALT',   'Ww25q.Nfo $M+^{@ID)+/B_3-smx9qo6T3W`l82|{.pp]2^EZhvX2jsgB5cnavm!' );
define( 'NONCE_SALT',       '%44[>6b&][}<-)jLOmE1JuR9=mIz:x)o6Ir!q`QD;e4v_>gj`dW>S3Ghf?LDM&!,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'theme_';

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
