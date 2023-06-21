<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#">
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

    
   
   
    ?>

    
 

 <table class="table">
  <thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">descrizione</th>
      <th scope="col">parcheggio</th>
      <th scope="col">voto</th>
      <th scope="col">distanza dal centro</th>
    </tr>
  </thead>


  <tbody>
    <?php 
    forEach ($hotels as $hotel ) {
        echo "<tr>";
        echo "<td>" . $hotel['name'] . "</td> ";
        echo "<td>" . $hotel['description'] . "</td> ";
        echo "<td>" . ($hotel['parking'] ? 'yes' : 'no') . "</td> ";
        echo "<td>" . $hotel['vote'] . "/5 </td> ";
        echo "<td>" . $hotel['distance_to_center'] . " Km </td> ";
        
        echo "</tr>";
    }
//     echo "
//     <tr>
//         <td> 
           
//             " .  $hotels[0]['name'] . "
           
//         </td>

//         <td> 
           
//             " .  $hotels[0]['description'] . "
           
//         </td>

//         <td>
//            " . 
//             if ($hotels[0]['parking'] ) {
//                 echo "si";
//             } else {
//                 echo "no";
//             }
//            . "
//         </td>

//         <td> 
//         " .  $hotels[0]['vote'] . "
           
//         </td>

//         <td> 
           
//             " . $hotels[0]['distance_to_center'] . "
           
//         </td>
//     </tr>
// ";
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html