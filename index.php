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

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>PHP-HOTEL</title>
</head>

<body>
    <table class="col-4 m-5 table">
        <thead>
            <tr>
                <th>LISTA HOTEL</th>
            </tr>
        </thead>

        <tbody>


            <?php
            foreach ($hotels as $hotel) { ?>
                <tr>
                    <td> <?php echo $hotel['name'] ?></td>

                    <td> <?php echo $hotel['description'] ?></td>


                    <td> <?php echo $hotel['vote'] ?></td>

                    <td> <?php echo $hotel['distance_to_center'] ?></td>
                </tr>



            <?php  } ?>

        </tbody>
    </table>

    <form action="" method="get" class="m-5">
        <label for="parking">Disponibilità parcheggio</label>
        <select name="parking" id="parking">
            <option value="true">Si</option>
            <option value="false">No</option>

        </select>
        <label for="stars">rating</label>
        <select name="stars" id="stars">
            <option value="1">
                1
            </option>
            <option value="2">
                2
            </option>

            <option value="3">
                3
            </option>
            <option value="4">
                4
            </option>
            <option value="5">
                5
            </option>

        </select>


    </form>

</body>

</html>