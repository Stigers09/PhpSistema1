<?php
spl_autoload_register(function($class){
    // Librerias/Core/home.php
    if (file_exists("Librerias/".'Core/'.$class.".php")) {
        require_once ("Librerias/".'Core/'.$class.".php");        
    }
});
