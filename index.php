
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

foreach ($hotels as $hotel => $value) {    
    // var_dump($value['name'],$value['description'],$value['parking'],$value['vote'],$value['distance_to_center']);
    var_dump(strval($value['distance_to_center']));    


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <div>
        <h1>Hotel</h1>
        <?php 
            foreach ($hotels as $hotel => $value) {
         ?>
            <p>Nome Hotel: <?php echo $value['name']; ?></p>            
            <p>Descrizione: <?php echo $value['description']; ?></p>             
            <?php 
                if ($value['parking'] === true) {
                    $value['parking'] = 'disponibile';
                }else {
                    $value['parking'] = 'non disponibile';
                }
            ?>
            <p>Parcheggio: <?php echo $value['parking'];?></p>
            <p>Stelle: <?php 
                for ($i = 0; $i < $value['vote']; $i++) {
                    echo '&star;';
                } ?></p>
            <p>Distanza dal centro: <?php echo strval($value['distance_to_center']) ?> Km</p>
            <?php
            
            

        }  ?>
    </div>
    <div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome Hotel</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Stelle</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel => $value) { ?>
                    <tr>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['description']; ?></td>
                        <?php 
                            if ($value['parking'] === true) {
                                $value['parking'] = 'disponibile';
                            }else {
                                $value['parking'] = 'non disponibile';
                            }
                        ?>
                        <td><?php echo $value['parking']; ?></td>
                        <td> <?php 
                            for ($i = 0; $i < $value['vote']; $i++) {
                                echo '&star;';
                            } ?></p>
                        </td>
                        <td><?php echo strval($value['distance_to_center']) ?> Km</td>
                    </tr>
                <?php } ?>
                
            </tbody>                       
    
        </table>
    </div>    
    
</body>
</html>