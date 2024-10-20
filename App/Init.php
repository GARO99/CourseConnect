<?php
require_once "Config/Config.php";

spl_autoload_register(function($nameclass){
    $file = __DIR__ . "/". str_replace("\\", "/", $nameclass) . ".php";

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "Library not found: " . $file . PHP_EOL;
    }
});

?>
