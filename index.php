<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Hotel</title>
</head>
<body>
<table class="table">
        <thead>
            <tr>
            <?php foreach($hotels[0] as $key => $info) {?>
                <th scope="col"><?= $key ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($hotels as $hotel) {?>
        <tr>
            <?php foreach($hotel as $key => $info) { ?>
                <?php if ($key === "parking"){ ?>
                    <td><?= $info ? "Present" : "Not avaliable" ?></td>
                <?php } elseif ($key === "distance_to_center"){ ?>
                    <td><?= $info ?> Km</td>
                <?php } else { ?>
                    <td><?= $info ?></td>
                <?php } ?>
            <?php } ?>
        </tr>
        <?php } ?>
    </tbody>
    </table>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>