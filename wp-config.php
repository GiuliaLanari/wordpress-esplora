<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-esplora' );

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
define( 'AUTH_KEY',         ';~D9xlHWG0hLx8^V]H4!G@v<l+StG!-M,(A5!OXqPZ*80mq*<14b<ImDJ*KKb:Bg' );
define( 'SECURE_AUTH_KEY',  'ew3@B6nsk?Z-;k:KdExA$IaX-=HbPC|U+;x=)4k/i7$nP `]RO,Kzqmh;nHpiR0B' );
define( 'LOGGED_IN_KEY',    'ABq$._Vh<&TV>lRA0Ye7%|:32IiqQAiE1,J%[@X/OGAT=aS?4oCa~]+k$<v{hQSS' );
define( 'NONCE_KEY',        'Fm*pH})E]qZhd<39={V7+sTW*h=I5w&;(:RK^7P/RmG8!t%*0/JxYmBNH(X+~Cl7' );
define( 'AUTH_SALT',        '=xpLUw9m`M2,iv8H?vSxAoQH*Q{9|tFd^+xc<tz02p+6G(z&W%g]^J!j>vfRS^jo' );
define( 'SECURE_AUTH_SALT', '*(t9tB(rcDRrAA,WBJR#R)LRb3G/^N~WeE?mnaeANpZZxO3HOAzuh*&VM_5U5>$E' );
define( 'LOGGED_IN_SALT',   '6AGw#l)>(H:HcZP@KFM/b=ACnYs$)}j6 szUV%$QlGKo{b_XQ/H]@W:u1aJ+ZWqd' );
define( 'NONCE_SALT',       'nNXRzM5~doar;`3FO!`a-hYf1G~y}2.XjO@J0COUCoZUE(=aJWYR:.piORK<`1qY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
