<?php

const ABSPATH = __DIR__;

spl_autoload_register(function($class) {

    $class = '/' . $class;

    // Namespaces zu Ordnernamen Konvertieren
    $class = str_replace('\\', '/', $class);

    // Dateiendung .php anhängen
    $class .= '.php';

    // Datei includen wenn sie existiert
    if (file_exists(ABSPATH . '/app' . $class)) {
        require ABSPATH . '/app' . $class;
    } else {
        return;
    }

});

$view = new View;
$view->render('header')->render('navbar')->render('footer');