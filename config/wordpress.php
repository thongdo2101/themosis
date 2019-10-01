<?php

/*
|--------------------------------------------------------------------------
| Notes - README
|--------------------------------------------------------------------------
|
| You can add as many WordPress constants as you want here. Just make sure
| to add them at the end of the file or at least after the "WordPress
| authentication keys and salts" section.
|
*/

/*
|--------------------------------------------------------------------------
| WordPress authentication keys and salts
|--------------------------------------------------------------------------
|
| @link https://api.wordpress.org/secret-key/1.1/salt/
|
*/
define('AUTH_KEY',         '@;y/l<?&3E&JChbA:%wD.J)3iOMr+_iB8FtQ|%^lh+Qo(H}.|Ahh@@Lp!!TYhX|1');
define('SECURE_AUTH_KEY',  ' .45>a>&!`*XXz-kv/z03(R5~3|xil_X|F@0+t+JV~Hc8sd]`;rpb]WqJ)-bm#bu');
define('LOGGED_IN_KEY',    'aPI.^P[@tbHO+E FJh4L2{~+]cB=Nti2Fn};xG3SDM[(VdS-pau}|oZ=zT%LEd8(');
define('NONCE_KEY',        'zmql([<+)h:oADZ2=p=l=ZXPWam7&z+NNGf,;M+m,RnE*-/-vrd JaFWOau45Aa?');
define('AUTH_SALT',        'viuE}1$U`K>~@N_vNH^N6/+LMu_Ntw)otN8&<i3OR+H{ac;O%d*-8X6;YEUnRgj!');
define('SECURE_AUTH_SALT', '|)(# 6>+Dly%7_J(%[Ax{#]2Ovj=l$ntO#+zYznCk;zAR^zZal- w-D&Gv#z.9~Z');
define('LOGGED_IN_SALT',   'iJM~>`6Ow`R|BcSC}L&qOWViYeT%69|iA#|&ca<.E-H8k]CLKDN-*EKw.tvi7!j ');
define('NONCE_SALT',       '&m55PH}hP9U8/U?}&KT5=+]|P!,k=`:]Bsft(q=tIXQ]39%:YP^2UU`yS~U(2-9K');

/*
|--------------------------------------------------------------------------
| WordPress database
|--------------------------------------------------------------------------
*/
define('DB_NAME', config('database.connections.mysql.database'));
define('DB_USER', config('database.connections.mysql.username'));
define('DB_PASSWORD', config('database.connections.mysql.password'));
define('DB_HOST', config('database.connections.mysql.host'));
define('DB_CHARSET', config('database.connections.mysql.charset'));
define('DB_COLLATE', config('database.connections.mysql.collation'));

/*
|--------------------------------------------------------------------------
| WordPress URLs
|--------------------------------------------------------------------------
*/
define('WP_HOME', config('app.url'));
define('WP_SITEURL', config('app.wp.url'));
define('WP_CONTENT_URL', WP_HOME.'/'.CONTENT_DIR);

/*
|--------------------------------------------------------------------------
| WordPress debug
|--------------------------------------------------------------------------
*/
define('SAVEQUERIES', config('app.debug'));
define('WP_DEBUG', config('app.debug'));
define('WP_DEBUG_DISPLAY', config('app.debug'));
define('SCRIPT_DEBUG', config('app.debug'));

/*
|--------------------------------------------------------------------------
| WordPress auto-update
|--------------------------------------------------------------------------
*/
define('WP_AUTO_UPDATE_CORE', false);

/*
|--------------------------------------------------------------------------
| WordPress file editor
|--------------------------------------------------------------------------
*/
define('DISALLOW_FILE_EDIT', true);

/*
|--------------------------------------------------------------------------
| WordPress default theme
|--------------------------------------------------------------------------
*/
define('WP_DEFAULT_THEME', 'themosis');

/*
|--------------------------------------------------------------------------
| Application Text Domain
|--------------------------------------------------------------------------
*/
define('APP_TD', env('APP_TD', 'themosis'));

/*
|--------------------------------------------------------------------------
| JetPack
|--------------------------------------------------------------------------
*/
define('JETPACK_DEV_DEBUG', config('app.debug'));
