<?php 
//farem servir autoload per enllaçar classes i per activar la
//base de dades
require_once "conexion.php";
$con= new Conexion();
spl_autoload_register(function ($class_name) {
    $directories = array(
        'classes/',
        'interfaces/'
    );

    foreach ($directories as $directory) {
        $file = $directory . $class_name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
?>