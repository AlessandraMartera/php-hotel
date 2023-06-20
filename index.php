<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
    crossorigin="anonymous">
    <title>php hotels</title>

    <style>
        table{
            
            margin: 50px 0;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<!-- Prima stampate in pagina i dati, 
senza preoccuparvi dello stile (vedi `var_dump`). 
Dopo aggiungete `Bootstrap` e mostrate le informazioni 
con **una tabella**. -->

<!-- 
    Aggiungere un form ad inizio pagina
    che tramite una richiesta `GET` permetta 
    di **filtrare gli hotel che hanno un parcheggio** 
-->


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
           
        
        echo "<table class='table'>";

        // echo "<tr>";
                    
        //     foreach ($hotels as $key => $value){
               
           
        //     };
            
        // echo "</tr>";

        foreach ($hotels as $hotel) {
           
            echo "<tr>";
             
            foreach ($hotel as $key => $value) {
               
                echo "<td>". $value . "</td>";
            };

            echo "</tr>";
        };
        
        echo "</table>";
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html