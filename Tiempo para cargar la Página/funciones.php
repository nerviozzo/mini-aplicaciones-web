<?php
function iniciar_contador() {
    $tiempo = microtime();
    $tiempo = explode(" ",$tiempo);
    $tiempo = $tiempo[1] + $tiempo[0];
    $tiempoinicial = $tiempo;
}

?>
