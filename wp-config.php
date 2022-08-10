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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\ProgramFiles\xampp\htdocs\wordpress\wp-content\plugins\wp-super-cache/' );
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
define( 'AUTH_KEY',         'oOYaO~LSN`Fy20-na8AWYAdODSuj`d5+b/j%M963>&)yTS0EA=|G(1^;TP+@{:n`' );
define( 'SECURE_AUTH_KEY',  'U_zx*fp1$CzG7/xe)=76pXo}/M^@IsmDMcUP49_Bvl)yZB#hv0{6ziS{LVimJ77F' );
define( 'LOGGED_IN_KEY',    '}MZLDo}.wiS17G=sK@$O#w|@;-A6d1$[*K1a|F5b1}av?CpxxT:K*Oh#f2nn)x%0' );
define( 'NONCE_KEY',        'T*_0;}16KDTtmxY]R6VP8@0|3OfK^Kxm. |wsW/x^Z1[CR#%pQH:Ph9sHRu3Ai}u' );
define( 'AUTH_SALT',        '3lTJZ|8P2uG?X9R;ov!Vc<C#B?EZ0V Tm(!KK4/F,RY<!.baz>dzD(}[5aros9YK' );
define( 'SECURE_AUTH_SALT', '#?T3>Kgi:>wa-XJ*9RKY HiW+/lcG&b?T_|V0$e ~OsiX:10Cb-NPN7<qx? %Ayj' );
define( 'LOGGED_IN_SALT',   'cq]|[fSWwBgv, _o*UdCKqY%JNl^*i>G,?~b>zKEdb1rHIn)vK=gUK>L}ZF;v+}=' );
define( 'NONCE_SALT',       'M9Zw$*E(/JU*YN!I>/jwG/v+W}=q:pVJ.YnyC]V^.:T$p<o}OV?rtV].XW_}6%^;' );

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
