<?php
include "products_manager.php";




//delete product 
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $obj = new ProductManager();
    $obj->deleteProduct($id);

}

if (isset($_POST['update_product'])) {
    $updated_id = $_GET['edit'];
    $updated_name = $_POST['updated_name'];
    $updated_desc = $_POST['updated_description'];
    $updated_price = $_POST['updated_price'];
    $updated_image = $_POST['updated_image'];

    $obj = new ProductManager();
    $obj->updateProduct($updated_id, $updated_name, $updated_desc, $updated_price, $updated_image);

    

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
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
                    
                    <li class="nav-item">
                        <a class="nav-link" href="form_product.php">Add product</a>
                    </li>
                    

                </ul>
                
            </div>
        </div>
    </nav>

    <div class="products m-5">
        <div class="row">
            <?php
            $obj = new ProductManager();
            $obj->view_all_prods();
            ?>
        </div>
    </div>

    

    


    <section class="edit-form">
        <?php
        if(isset($_GET['edit'])){
        $edit_id = $_GET['edit'];


            
            // $obj = new ProductManager();
            // $obj->get_product_id($edit_id);
            
            $obj = new ProductManager();
            $obj->get_product_id($edit_id);
            $data = $obj->get_product_id($edit_id);

            

           
        }


            
            
        

         




        ?>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">

                    <div id="swup" class="card border-0 shadow transition-fade mb-5">
                        <div class="card-body">
                            <form class="" action="" method="post">
                                <div class="text-center">
                                    <svg class=" " xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control my-4 py-2 reg-username" name="updated_name" value= <?php echo $data['name']?>>
                                    <label for="">Name</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control my-4 py-2 reg-email" name="updated_description" value=<?php echo $data['description']?>>
                                    <label for="">Description</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control my-4 py-2 reg-phone" name="updated_price" value=<?php echo $data['price']?>>
                                    <label for="">Price</label>

                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control my-4 py-2 reg-phone" name="updated_image" value=<?php echo $data['image']?>>
                                    <label for="">Image</label>

                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" name="update_product" value="update_product"
                                        class="btn btn-primary btn-register">Update</button>
                                        <button type="reset" name="update_product" id="close-edit" value="cancel"
                                        class="btn btn-primary btn-register">Close</button>
                                </div>




                               



                                
                        </div>



                        </form>

                       
                        





                    </div>
                </div>

            </div>
        </div>
        
      
    </section>
    <script>

       
    const closeBtn =  document.querySelector('#close-edit')
    closeBtn.addEventListener('click', ()=>{
        document.querySelector('.edit-form').style.display ='none'
    })

    const editBtn =document.querySelector('#edit')
    editBtn.addEventListener('click', ()=>{
        document.querySelector('.edit-form').style.display ='block'
    })
    


     </script>

   

</body>

</html>