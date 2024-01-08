<?php

require_once('Ciclo.php');

$ciclo = new Ciclo(1, 'DAW', 'Desemvolupament Aplicacions Web');

// $ciclo->setId(1);
// $ciclo->setSiglas('DAW');
// $ciclo->setNombre('Desemvolupament Aplicacions Web');

echo $ciclo->getSiglas() . '<br>';
echo $ciclo->getNombre().'<br>';

echo 'Número de cursos: ' . Ciclo::$numCursos ;

?>