<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Hotel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha512-3hYWZOC+FS2u8T/c41BllIj2ftg7sq3aDfMhOq7EdfQBlQbP3TyIciXl6M2ntFbkZoDtA5CrM3qk3N9rA6X5mQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div class="container mt-5">
        <div class="table-container">
            <h1 class="mb-4 text-center">Elenco Hotel</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Parcheggio</th>
                        <th>Voto</th>
                        <th>Distanza dal centro (km)</th>
                    </tr>
                </thead>
                <tbody>
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

                    // Itero sull'array per popolare la tabella
                    foreach ($hotels as $hotel) {
                        echo '<tr>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['description'] . '</td>';
                        echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
