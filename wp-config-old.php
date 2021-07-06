<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gamechurch_de_201711');

/** MySQL database username */
define('DB_USER', 'gamechurch_de_201711');

/** MySQL database password */
define('DB_PASSWORD', 'MiAjbu18IW1t1VtfIUns');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'uX`(zuBy?U0?!JzGX|O8uB.]-}e+S_u-GUhz65D?+v3I|S=ZB6,5Rf$sZoz1DW70');
define('SECURE_AUTH_KEY',  '^Bm|-^ryx_mo?8ZPWOvjfW-fI#-qyMZe[0Rg1_c!:@$&RqF#BI@Q&c v^dcON7R=');
define('LOGGED_IN_KEY',    'bi]5|=Q+BG`PoIM}7Y6cK1I!AD1,+pT`T:Qy>=+P>.[n-MaO/M*JddED0|kRvxp-');
define('NONCE_KEY',        '1Lhi]{[E!7y0]Q!vEjihs!HP>>*coO~y]V~a>_RGr/Z?E$gk+]cG7t1V$LYeleF:');
define('AUTH_SALT',        '8@u*Mq9w?l^3@(XO.$qG,GhMk [04Sa=F;W1O/>-VCtE knw35^(Rq}5]U 9rlb0');
define('SECURE_AUTH_SALT', 'g0+Rw{QT#bhht@N$Zb@s0 p4ATX6]m.fM&HeM4jwVU1ws5+r3|gDRT?e)S-&Ew*k');
define('LOGGED_IN_SALT',   'c~G1wtKVWbe@TL O1EQJMT)iAdx:+=De79A^zG@SYlV)#Ifgn.!].+=fBo`n/s%4');
define('NONCE_SALT',       '92*s|VHO G=d-NV8{=NvV*r-]|4FHYXS4VTi2Sh-$}t<g}WGEG5=yaB@=7<YT6,M');


$table_prefix = 'wp_';

define( 'FL_BUILDER_MODSEC_FIX', true );

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'gamechurch.de');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
