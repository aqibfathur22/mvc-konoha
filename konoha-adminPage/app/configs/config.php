<?php 

define('BASEURL', 'http://localhost/konoha/konoha-adminPage/public');

// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'dbkonoha_new');

// define('VIEWS_URL', BASE_URL . 'views/');
// define('BACKEND_URL', BASE_URL . 'backend/');
// define('ASSETS_URL', BASE_URL . 'assets/');
// define('UPLOADS_URL', BASE_URL . 'uploads/');

// Path configuration - Only define if not already defined
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(dirname(__DIR__)) . '/');
}
if (!defined('BACKEND_PATH')) {
    define('BACKEND_PATH', ROOT_PATH . 'backend/');
}
if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', ROOT_PATH . 'views/');
}
if (!defined('UPLOADS_PATH')) {
    define('UPLOADS_PATH', ROOT_PATH . 'uploads/');
}

// Upload configuration
define('MAX_FILE_SIZE', 5 * 1024 * 1024); // 5MB
define('ALLOWED_FILE_TYPES', ['jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx']);

// Pagination
define('ITEMS_PER_PAGE', 10);

// Session configuration
define('SESSION_TIMEOUT', 3600); // 1 hour

?>