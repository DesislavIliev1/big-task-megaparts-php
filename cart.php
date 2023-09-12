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


<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    
                    
                    

                </ul>
                
            </div>
        </div>
    </nav>
   

    
    <?php

    $output = "";

    $output .=  "<table class='table'>
    <thead>
        <tr>
            <th scope='col'>id</th>
            <th scope='col'>Name</th>
            <th scope='col'>Description</th>
            <th scope='col'>Price</th>
            <th scope='col'>Image</th>
            <th scope='col'>Action</th>
           
          
        </tr>
        
    </thead>
    <tbody>
        
    ";





    if(!empty($_SESSION['cart'])){

        foreach ($_SESSION['cart'] as $key => $value ){



            $output .= "
            <tr>
                <td>".$value['id']."</td>
                <td>".$value['name']."</td>
                <td>".$value['description']."</td>
                <td>".$value['price']. "лв</td>
                <td><img src='icons".$value['image']."'></td>
                <td>
                <a href='cart.php?action=remove&id=".$value['id']."'>
                <button class='btn btn-danger'>Remove</button>
                </a>
                
                </td>
            </tr>";

            
        }


       

    }

    $output .= "<tr>
                   <td colspan='3></td>
                   <td></b>Total Price </b></td>
                   <td>
                   <a href='cart.php?action=clearall'>
                   <button class='btn btn-danger'>Clear Cart</button>
                   </a></td> ";

    
    echo $output;

    if(isset($_GET['action'])){

        if($_GET['action'] == 'clearall'){
            unset($_SESSION['cart']);
        }

        if($_GET['action'] == 'remove'){

            foreach ($_SESSION['cart'] as $key => $value){
                
                if($value['id'] == $_GET['id']){
                    unset($_SESSION['cart'][$key]);
                }

            }
        }
    }
    
    ?>



</body>

</html>