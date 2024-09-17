<?php
namespace Libraries;

class DabaBaseProviderFactory {
    private static $instance = null;

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new DabaBaseProvider();
        }
        return self::$instance;
    }
}
?>