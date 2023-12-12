<?php

    $hotelsArray = [

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


        if (isset($_GET['parkingRequest'])) {
            $parkingRequest = $_GET['parkingRequest'];
        };

    ?>



<!DOCTYPE html>
<html lang="en">

   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<section class="p-5 w-25">


<form action="index.php" method="GET" >
<select class="form-select" aria-label="Default select example" name="parkingRequest">
  <option selected disabled>Parking Requested?</option>
  <option value="true" >Yes</option>
  <!-- <option value="false">No</option> -->
</select>
<input type="submit" name="submit" value="Search" class="mt-2"/>
<input type="submit" name="submit" value="Reset Research" class="mt-2"/>
</form>
    </section>


<!-- HOTELS DEATAILS -->
<section class="p-5">


<!-- TABLE -->
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance to Center</th>

            </tr>
        </thead>
        <tbody>
            <!-- Se parkingRequest è settato -->
            <?php if (isset($parkingRequest)) { ?>

                <!-- Se parkingRequest è settato ed è TRUE -->
                <?php if ($parkingRequest == true) { ?>

                    <!-- Fai ciclare l'array degli hotel  -->
            <?php foreach ($hotelsArray as $key => $singleHotel) { ?>
                 <!-- Se parkingRequest è settato è TRUE ed è uguale al singleHotel[parking] mostri l'hotel per cui questa condizione è vera-->
                <?php if ($singleHotel['parking'] == $parkingRequest) { ?>
                <tr>
                <th scope="row"><?php echo ($key + 1) ?></th>
                <td><b><?php echo $singleHotel['name']; ?></b></td>
                <td><?php echo $singleHotel['description']; ?></td>
                <td>
                    <?php if ($singleHotel['parking'] == true) { ?>
                                    Si <?php } else { ?>
                                        No <?php } ?>
                </td>
                <td><?php echo $singleHotel['vote']; ?></td>
                <td><?php echo $singleHotel['distance_to_center']; ?> km</td>

                </tr>
              
                <!-- Se parkingRequest è settato è TRUE ed è diverso dal singleHotel[parking] non mostrare l'hotel per cui questa condizione è vera -->
                <?php } else { ?> <?php } ?>
                <?php } ?>
                <!-- // Se parkingRequest è settato è TRUE ed è diverso dal singleHotel[parking] -->

                  <!-- Se parkingRequest è settato ed è FALSE -->
            <?php }?>
               
                <!-- // Se parkingRequest è settato ed è FALSE -->

                
                <?php } else { ?> <?php foreach ($hotelsArray as $key => $singleHotel) { ?>
                
                <tr>
                <th scope="row"><?php echo ($key + 1) ?></th>
                <td><b><?php echo $singleHotel['name']; ?></b></td>
                <td><?php echo $singleHotel['description']; ?></td>
                <td>
                    <?php if ($singleHotel['parking'] == true) { ?>
                                    Si <?php } else { ?>
                                        No <?php } ?>
                </td>
                <td><?php echo $singleHotel['vote']; ?></td>
                <td><?php echo $singleHotel['distance_to_center']; ?> km</td>

                </tr>
                <?php } ?> <?php } ?> 
                <!-- // Se parkingRequest è settato -->
           
        </tbody>


        
    </table>
</section>
<!-- // HOTELS DETAILS -->
  




</body>

</html>