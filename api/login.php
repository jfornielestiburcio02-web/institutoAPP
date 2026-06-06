
<?php

// Cargamos Composer (vendor)
require __DIR__ . '/vendor/autoload.php';

// Test básico de PHP + Composer
echo "✔ Composer está funcionando en Vercel<br>";

// Comprobamos si existe Firebase (si lo instalaste)
if (class_exists(\Kreait\Firebase\Factory::class)) {
    echo "✔ Firebase SDK cargado correctamente<br>";
} else {
    echo "❌ Firebase SDK NO detectado<br>";
}

// Mostrar variables de entorno (opcional de debug)
echo "<br><strong>Variables de entorno:</strong><br>";

foreach ($_ENV as $key => $value) {
    echo $key . "<br>";
}
