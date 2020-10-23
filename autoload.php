<?php

/**
 * Deze functie wordt elke keer als je nieuwe instance maakt met 'new <ClassName>()' door PHP uitgevoerd
 * De functie zoekt het juiste PHP bestand op voor de class en laadt het in met een require.
 * Dit is dus een Autoloader. Deze Autoloader zorgt er voor dat automatisch het juiste bestand wordt ingeladen
 * Dit voorkomt dat je overal heel veel require statements moet schrijven die classes inladen in je code!
 *
 * @param $class string De naam van de class die geladen moet worden
 */
function autoload_class($class)
{
    $base_dir = __DIR__ . '/src/';

    // Vervangt de slashes: "\" in de namespace prefix met een "/" en zet er ".php" achter.
    // Wat gebeurt er dan denk je? Waar zoekt het script nu naar de class, in welk bestand
    // Gebruik een echo om te "debuggen" vanaf waar PHP de class probeert in te laden.

    $file = $base_dir . str_replace('\\', '/', $class) . '.php';

    // Als het bestand bestaat, laadt het in
    if (file_exists($file)) {
        require $file;
    }
}

// Dit stelt PHP in zodat de function 'autoload_class' (hierboven) gebruikt wordt voor het laden van classes
spl_autoload_register('autoload_class');