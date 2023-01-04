<?php
define('BASE_PATH', '../');
require_once(BASE_PATH.'/logic/products.php');
require_once(BASE_PATH.'/layouts/header.php');

$products = getProducts();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
</head>

<body>

<div class="container my-4">
<a class="btn btn-success" href="add-product.php?product_id=">
       <h7 class="text-white">ADD</h7>
       <h7 class="fa fa-plus text-white"></h7>

      </a>


<table class="table">
  <thead class="table-dark">
    <tr >
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Image URL</th>
      <th scope="col">Price</th>
      <th scope="col">discount</th>
      <th scope="col">Barcode</th>
      <th scope="col"> ID</th>
      <th scope="col">Category</th>
      <th scope="col"> ID</th>
      <th scope="col">Size</th>
      <th scope="col"> ID</th>
      <th scope="col">Color</th>
      <th scope="col">rating</th>
      <th scope="col">Count </th>
      <th scope="col">Recent</th>
      <th scope="col">Featured</th>
    
      <th scope="col">Update </th>
      <th scope="col">Delete </th>

  
    </tr>
  </thead>
  <tbody>
  <?php
  foreach ($products as $product) {
      ?>
    <tr>
        
      <th scope="row"><?=$product['id'] ?></th>
      <td><?=$product['name'] ?></td>
      <td><?=$product['description'] ?></td>
      <td><img <?=$product['image_url'] ?> width="150" height="150"/></td>
      <td><?=$product['price'] ?></td>
      <td><?=$product['discount'] ?></td>
      <td><?=$product['bar_code'] ?></td>
      <td><?=$product['category_id'] ?></td>
      <td><?=$product['category_name'] ?></td>
      <td><?=$product['size_id'] ?></td>
      <td><?=$product['size_name'] ?></td>
      <td><?=$product['color_id'] ?></td>
      <td><?=$product['color_name'] ?></td>
      <td><?=$product['rating' ] ?></td>
      <td><?=$product['rating_count'] ?></td>
      <td><?=$product['is_recent' ] ?></td>
      <td><?=$product['is_featured' ] ?></td>

      <th scope="col">
       <a class="btn btn-success" href="add-product.php?product_id=<?= $product['id'] ?>">
       <h7 class="fa fa-pen text-white"></h7>
      </a>
      </th>


      <th scope="col">
      <a class="btn btn-danger" href="">
       <h7 class="fa fa-trash text-white"></h7>
      </a>
      </th>
    </tr>
   
<?php
  }
?>   
  </tbody>
</table>
</div>


</body>