<?php

$requested_page = $_GET['page'] ?? 'main';

$page_file = 'section/' . $requested_page . '.php';

require 'templates/header.php';


if (file_exists($page_file)){
    require $page_file;
} else {
    echo "<h1>404 Error</h1><p>The page '{$requested_page}' was not found.</p>";
}

require 'section/about.php';
require 'section/contact.php';

require 'templates/footer.php';

?>