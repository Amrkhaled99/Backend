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
  foreach ($products as $p) {
      ?>
    <tr>
        
      <th scope="row"><?=$p['id'] ?></th>
      <td><?=$p['name'] ?></td>
      <td><?=$p['description'] ?></td>
      <td><?=$p['image_url'] ?></td>
      <td><?=$p['price'] ?></td>
      <td><?=$p['discount'] ?></td>
      <td><?=$p['bar_code'] ?></td>
      <td><?=$p['category_id'] ?></td>
      <td><?=$p['category_name'] ?></td>
      <td><?=$p['size_id'] ?></td>
      <td><?=$p['size_name'] ?></td>
      <td><?=$p['color_id'] ?></td>
      <td><?=$p['color_name'] ?></td>
      <td><?=$p['rating' ] ?></td>
      <td><?=$p['rating_count'] ?></td>
      <td><?=$p['is_recent' ] ?></td>
      <td><?=$p['is_featured' ] ?></td>

      <th scope="col">
       <a class="btn btn-success" href="add-product.php?product_id=<?= $p['id'] ?>">
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