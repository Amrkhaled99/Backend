<?php
define('BASE_PATH', './');
require_once('./logic/products.php');
require_once('./logic/cart.php');
$key=$_GET['key'];
if (isset($_GET['id'])) {
    $product = getProductById($_GET['id']);
    if ($product) {
       switch($key){

        case 1:
            # Add & Increase Product 
            addProductToCart($product);
            break;

         # Decrease Product 
            case 2:
            decQuantity($product);
            break;

         # Remove Product 
         case 3:
            removeProduct($product);
            break;

            

        }
       }
       
      
        
    
}
header('Location:cart.php');
?>