<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

    echo "<table class='table table-striped table-bordered'>";
    echo "<tr><th>Nome</th>  <th>Descrizione</th> <th>Parcheggio</th> <th>Voto</th> <th>Distanza dal centro (km)</th></tr>";

    foreach ($hotels as $hotel) {
        echo "<tr>";
        echo "<td>" . $hotel["name"] . "</td>";
        echo "<td>" . $hotel["description"] . "</td>";
        echo "<td>" . ($hotel["parking"] ? "Sì" : "No") . "</td>";
        echo "<td>" . $hotel["vote"] . "</td>";
        echo "<td>" . $hotel["distance_to_center"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    ?>

</body>
</html>