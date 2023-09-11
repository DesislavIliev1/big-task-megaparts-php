<?php

require_once ('product_controller.php');
class ProductManager extends Product_Controller {

    public function showProducts() {
        $this-> getProducts();
     }
    

    public function addProduct($name, $description, $price, $image) {
        $this->createProduct($name, $description, $price, $image);
     }

     public function view_all_prods(){
        $this->viewProducts();

     }

    public function viewProduct($id) {
        return $this->readProduct($id);
    }

    public function updateProduct($id, $name, $description, $price, $image) {
        $this->editProduct($id, $name, $description, $price, $image);
     }

    public function deleteProduct($id) {
         $this->removeProduct($id);
     }

     public function get_product_name($name){
        $this->get_name($name);
     }

    

     public function get_product_id($id){
        return $this->get_id($id);
                
     }

     public function display_product_by_id($id){
        $this->show_product_by_id($id);
        
        
     }

     public function find_name_from_cart($name){
        return $this->get_product_name_from_cart($name);
     }

     public function addProductToCart($name, $description, $price, $image, $quantity){
        $this->inserProductToCart($name, $description, $price, $image, $quantity);

     }




}
   