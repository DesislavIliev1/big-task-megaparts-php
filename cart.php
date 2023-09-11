<?php 
session_start();
 

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

   

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
               
              
            </tr>
            
        </thead>
        <tbody>
            
        </tbody>
    </table>

    <?php
    if(!empty($_SESSION['cart'])){

        foreach ($_SESSION['cart'] as $key => $value ){



            $output .= "
            <tr>
                <td>".$value['id']."</td>
                <td>".$value['name']."</td>
                <td>".$value['description']."</td>
                <td>".$value['price']."</td>
                <td>".$value['image']."</td>
            </tr>";

            
        }


       

    }

    
    
    
    ?>



</body>

</html>