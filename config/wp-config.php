<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', getenv("DB_1_PORT_3306_TCP_ADDR") . ":" . getenv("DB_1_PORT_3306_TCP_PORT"));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'HKmwQZIiB19dA3Ptupk94HKmwQZIiB19dA3PtuRhQkbRTIGOacwEQYpWO7L4OgbHgZ62AAhZ');
define('SECURE_AUTH_KEY',  'Ptupk94HKmwQZHKmwQZIiB19dA3IiB19dA3wBRhQkbRTIGOacwEQYPtupk94L4OgbEQYpWO7');
define('LOGGED_IN_KEY',    'Ptupk9494L4QZHKmwQZIiB19dA3IiBHKmwacwEQYPtupk19dA3wAAhZHgZ62AAhZBRhQbEQY');
define('NONCE_KEY',        'tupk94L4QZHKmwQZIiB19dA3IiB1Ptupk94HKmwacwEQYP9dA3wBRhQkbRTIkbRTIGOacpWO');
define('AUTH_SALT',        'YPtupk94L4QZHKmwQZIiB19dA3IiBPtupk94HKmwacwEQ19dA3wBRhQkbRTIkbRTIGOacpWO');
define('SECURE_AUTH_SALT', 'ZHgZ6upk94HKmwIiB19dA3IiB19dA3wBRPtIkbRTIGOacpWO7GOOgAAhhQkbacwEQYPtupk9');
define('LOGGED_IN_SALT',   'QZHKmwQZIiB19dA3IiB19dA3wBZHKmwQZRT2AAhZB4L4RPtupk94HKmwacwEQYPtupk9hQkb');
define('NONCE_SALT',       'Ptpk94L4QZHKmwQZIiB1upk94HKmwacwEQYPtu9dA3IiB19dA3wBRhQkbRTIkbRTIGOacpWO');

$table_prefix  = 'wp_';
define('WPLANG', '');
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
