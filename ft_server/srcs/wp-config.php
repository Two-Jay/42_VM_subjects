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
define( 'DB_USER', 'jekim' );
/** Database password */
define( 'DB_PASSWORD', 'check1021' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

define( 'AUTH_KEY',         'put your unique phrase here' ); 
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' ); 
define( 'LOGGED_IN_KEY',    'put your unique phrase here' ); 
define( 'NONCE_KEY',        'put your unique phrase here' ); 
define( 'AUTH_SALT',        'put your unique phrase here' ); 
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' ); 
define( 'LOGGED_IN_SALT',   'put your unique phrase here' ); 
define( 'NONCE_SALT',       'put your unique phrase here' ); 

$table_prefix = 'wp_'; 

define( 'WP_DEBUG', false ); 
 
 
if ( ! defined( 'ABSPATH' ) ) { 
        define( 'ABSPATH', __DIR__ . '/' ); 
} 
 
require_once ABSPATH . 'wp-settings.php';