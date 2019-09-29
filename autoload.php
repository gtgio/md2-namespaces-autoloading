<?php

/**
 * Deze functie wordt elke keer als je nieuwe instance maakt met 'new <ClassName>()' door PHP uitgeveord
 * De functie zoekt het juiste bestand op voor de class en laadt het in met require.
 * Dit is dus een Autoloader. Deze Autoloader zorgt er voor dat automatisch het juiste bestand wordt geladen
 * Zodat je niet zelf alle classes hoeft op te geven met require.
 *
 * @param $class string De naam van de class die geladen moet worden
 */
function autoload_class($class)
{
    $base_dir = __DIR__ . '/src/';

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
}

//spl_autoload_register('autoload_class');