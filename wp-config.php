<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'redbread');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'fr_F{is6+sQ#}T{laee</x~ISz;qRjKI|+hG+g[xceU58-p-GPn<o+C/&|pu/L~a');
define('SECURE_AUTH_KEY',  'yNKj15MLfjWKu_tR9#Q[#n#CT7pEZncm*;+<6~,*yi~BgVSjEe)iQdW{uM@EuX[,');
define('LOGGED_IN_KEY',    '3fQ2b%$y fjr-|mi|RPw853n~n|T85VTdi&Fqxx]DxZ+c%;a=Xwh4OOAy-n:@MXn');
define('NONCE_KEY',        ' :f+H9|B.H>mLJCu0}y=P?wy098W)[2+QE*.I>G+Y-51}y>j2e2GY@`W>JWm;6|&');
define('AUTH_SALT',        '#u+&FCSQp{ezw3xa}k+6n(7lws@#czL5D%%L@V{K9niVsY?qKn0]P:#wi#olJFjh');
define('SECURE_AUTH_SALT', 'ABSp0sAJr1K1D;M|W8.,gXD`6P;F(o~?.D702iJP+{$IDoDuPi>SCjTs$=>mejoy');
define('LOGGED_IN_SALT',   'g.6q~]LM{Tl_);eK>QN:*ewkSQ$2-y+ TiBQ2wP4LNeAp<0J{>dJ;H`/ml4F*cw$');
define('NONCE_SALT',       'O`x:W8sYrw*]25-@OY)NT-8e%+MX+B>ex14,o+>Qi+OVW6M9ft=_uo!%b){6}6z ');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
