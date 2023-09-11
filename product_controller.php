<?php
 require_once ("connection.php");
 require_once('product.php');
 class Product_Controller extends Connection {

   public function getProducts(){
       $sql = "SELECT * FROM products ";
       $stmt = $this->connect()->query($sql);
       while($row = $stmt->fetch()){
        echo  '<div class="row col-lg-3 col-md-6 col-sm-12">
        <form  method="post" action="index.php?id='.$row['id']. '">
            <div class="col-sm-3 me-5 ">
                <div class="card-title">
                    <h5>'
                         .$row['name'].
                    '</h5>
                </div>
                <div class="card card-d">
                    <img src="icons/'.$row['image'].'" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-subtitle  card-text-p-2">'
                            . $row['description'].'
                            <mark class="text-end price">
                            ' .$row['price'].' лв.
                        </mark>
                        <input type="hidden" name="name" value="'.$row['name'].'";>
                        <input type="hidden" name="name" value="'.$row['price'].' ";>
                        <input type="submit" name="add_to_cart" value="Добави в количка" class="btn btn-primary">
                        
                       




                    </div>
                </div>

            </div>

        </form>
    </div>';
       }

   }


   public function viewProducts(){
    $sql = "SELECT * FROM products ";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
     echo  '<div class="row col-lg-3 col-md-6 col-sm-12">
     <form  method="post" action="index.php?id='.$row['id']. '">
         <div class="col-sm-3 me-5 ">
             <div class="card-title">
                 <h5>'
                      .$row['name'].
                 '</h5>
             </div>
             <div class="card card-d">
                 <img src="icons/'.$row['image'].'" class="card-img-top" alt="...">
                 <div class="card-body ">
                     <!-- <h5 class="card-title">Card title</h5> -->
                     <p class="card-subtitle  card-text-p-2">'
                         . $row['description'].'
                         <mark class="text-end price">
                         ' .$row['price'].' лв.
                     </mark>
                     <div>
                     <a href="view_product.php?delete='. $row['id'] .' " class="delete-btn btn btn-danger"><svg onclick="return confirm(are you want to delete)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                     <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                     <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                   </svg>delete</a>
                   <a href="view_product.php?edit='. $row['id'] .'" class="option-btn btn btn-success" id="edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                   <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                 </svg>update</a>
                 </div>
                    
                     
                    




                 </div>
             </div>

         </div>

     </form>
 </div>';
    }

}



   public function createProduct($name, $description, $price, $image) {
       $sql = "INSERT INTO products (name, description, price , image) VALUES (?, ?, ? ,?)";
       $stmt = $this->connect()->prepare($sql);
       $stmt->execute([$name, $description, $price , $image]);
   }


   public function inserProductToCart($name, $description, $price, $image , $quantity) {
    $sql = "INSERT INTO products (name, description, price , image, quantity) VALUES (?, ?, ? ,?,?)";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$name, $description, $price , $image , $quantity]);
}


   //Read user by ID
   public function readProduct($id) {
       $sql = "SELECT * FROM products WHERE id = ?";
       $stmt = $this->connect()->prepare($sql);
       $stmt->execute([$id]);
       while($row = $stmt->fetch()){
       
       echo '<p> ' .$row['id'], $row['username'],$row['email'],$row['role']. '</p>';
   }

       
   }

   // Update user information
   public function editProduct($id, $name, $description, $price, $image) {
       $sql = "UPDATE products SET name = ?, description = ?, price = ? , image = ? WHERE id = ?";
       $stmt = $this->connect()->prepare($sql);
       $stmt->execute([$name, $description, $price, $image, $id ]);
   }

   // Delete user by ID
   public function removeProduct($id) {
       $sql = "DELETE FROM products WHERE id = ?";
       $stmt = $this->connect()->prepare($sql);
       $stmt->execute([$id]);
   }


   public function get_name(string $name){
       $query = "SELECT username FROM products WHERE name = :name;";
       $stmt = $this->connect()->prepare($query);
       $stmt -> bindParam(":name", $name);
       $stmt ->execute();
   
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       return $result;
   
   
   }

   public function get_product_name_from_cart(string $name){
    $query = "SELECT username FROM cart WHERE name = :name;";
    $stmt = $this->connect()->prepare($query);
    $stmt -> bindParam(":name", $name);
    $stmt ->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}

public function get_product_id_from_cart($id){
    $query = "SELECT username FROM cart WHERE name = :name;";
    $stmt = $this->connect()->prepare($query);
    $stmt -> bindParam(":name", $name);
    $stmt ->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;


}
   
   
   

   public function get_id($id){
       $query = "SELECT * FROM products WHERE id = :id;";
       $stmt = $this->connect()->prepare($query);
       $stmt -> bindParam(":id", $id);
       $stmt ->execute();
   
       $result = $stmt->fetch(PDO::FETCH_ASSOC);
       return $result;
   
   
   }

   public function show_product_by_id($id){
       $sql = "SELECT * FROM products WHERE id = :id";
       $stmt = $this->connect()->prepare($sql);
       $stmt -> bindParam(":id", $id);
       // $stmt->execute([$id]);
      while($row = $stmt->fetch()){
           echo 'id : <p>'. $row['id']. '</p> <br>  username: <p>' . $row['username']. '</p> <br>  email: <p>'. $row['email']. '</p> <br>  role: <p>'. $row['role']. '</p>';
           
       }
   }

}

 