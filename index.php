<?php

require_once __DIR__ .  "./server.php";

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

</head>

<body>
    <div class="container text-center">
        <h1 class="my-5">tabella Produzioni</h1>

        <table class="table">
            <thead>
                <th>titolo</th>
                <th>lingua</th>
                <th>voto</th>
                <th>Regista</th>
                <th>nomination</th>
                <th>durata</th>
                <th>botteghino</th>
                <th>stagioni</th>
            </thead>
            <tbody>
                <?php foreach ($productions as $production): ?>
                <tr>
                    <td><?= $production->get_Titolo() ?></td>
                    <td><?= $production->lingua ?></td>
                    <td><?= $production->voto ?></td>
                    <td><?= $production->troupe->director ?></td>
                    <td><?= $production->nomination ? "yes" : "no"?></td>
                    <?php if($production instanceof movie): ?>
                    <td><?= $production->durata ?></td>
                    <td><?= $production->botteghino ?></td>
                    <?php elseif($production instanceof sereieTV): ?>
                    <td><?= $production->stagioni ?></td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>