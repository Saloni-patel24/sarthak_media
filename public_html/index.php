<?php

/**
 * Laravel - A PHP
 * @package Laravel
 * @author Name <email@email.com>
 */

 $url = urldecode(
    parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH)?? ''
);

//THIS File allows us to emulate Apache's "mod_rewrite" functinality from the

if ($url !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';

