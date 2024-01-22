<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Classes i objectes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <?php

    require_once('Ciclo.php');

    $ciclos = array
    (
        new Ciclo(1, 'DAW', 'Desemvolupament Aplicacions Web'),
        new Ciclo(2, 'DAM', 'Desemvolupament Aplicacions Multiplataforma'),
        new Ciclo(3, 'MARP', 'Màrqueting i Publicitat'),
    );

    // $ciclo = new Ciclo(1, 'DAW', 'Desemvolupament Aplicacions Web');
    // $ciclo = new Ciclo(2, 'DAM', 'Desemvolupament Aplicacions Multiplataforma');
    // $ciclo = new Ciclo(3, 'MARP', 'Màrqueting i Publicitat');
    
    // $ciclo->setId(1);
    // $ciclo->setSiglas('DAW');
    // $ciclo->setNombre('Desemvolupament Aplicacions Web');
    
    // echo $ciclo->getSiglas() . '<br>';
    // echo $ciclo->getNombre() . '<br>';
    
    // echo 'Número de cursos: ' . Ciclo::$numCursos;
    ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Siglas</th>
                <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ciclos as $ciclo) { ?>
                <tr>
                    <th scope="row">
                        <?php echo $ciclo->getId() ?>
                    </th>
                    <td>
                        <?php echo $ciclo->getSiglas() ?>
                    </td>
                    <td>
                        <?php echo $ciclo->getNombre() ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php echo 'Número de cursos: ' . Ciclo::$numCursos; ?>

</body>

</html>