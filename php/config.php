<?php
// Evitar el acceso directo al archivo
if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    // Mostrar error 404 en grande y detener la ejecución si alguien accede directamente
    header("HTTP/1.0 404 Not Found");
    echo "<h1 style='font-size: 50px; color: red; text-align: center;'>404 Not Found</h1>";
    exit;
}

// Aquí están tus datos sensibles
$token = "7847507216:AAEYNsjqwflBe9f5Zv-3vMLabw1siVFvlto";
$chat_id = "5157616506";
?>