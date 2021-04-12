<?php

session_start();

$database = require_once dirname(__FILE__) . '/modal/database.utils.php';

require_once dirname(__FILE__) . '/views/includes/top.inc.php';

if (isset($_GET['page'])) {
    $pageFilename = dirname(__FILE__) . '/controllers/' . $_GET['page'] . '.controller.php';
    if (file_exists($pageFilename)) {
        require_once $pageFilename;
    } else {
        require_once dirname(__FILE__) . '/controllers/404.controller.php';
    }
} else {
    require_once dirname(__FILE__) . '/controllers/home.controller.php';
}

require_once dirname(__FILE__) . '/views/includes/bottom.inc.php';
