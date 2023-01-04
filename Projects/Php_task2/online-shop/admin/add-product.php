<?php
// require_once(BASE_PATH.'/logic/products.php');
define('BASE_PATH', '../');
require_once(BASE_PATH.'/logic/products.php');
require_once(BASE_PATH.'/layouts/header.php');


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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Product</h1>
        </div>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
     
          <form class="row" action="" method="post"
            enctype="multipart/form-data">
            <div class="form-group col-6">
              <label>Name</label>
              <input name="name" class="form-control" value="" />
            </div>
            <div class="form-group col-6">
              <label>Image</label>
              <input name="image" type="file" />
            
            </div>
            <div class="form-group col-12">
              <label>Description</label>
              <textarea name="description"
                class="form-control"></textarea>
            </div>
            <div class="form-group col-6">
              <label>Price</label>
              <input name="price" class="form-control" type="number" min="0"
                value="" />
             
            </div>
            <div class="form-group col-6">
              <label>Discount %</label>
              <input name="discount" type="number" min="0" max="100" class="form-control"
                value="" />
            </div>
            <div class="form-group col-6">
              <label>Bar Code</label>
              <input name="bar_code" class="form-control"
                value="" />
            </div>
            <div class="form-group col-6">
              <label>Category</label>
              <select name="category_id" class="form-control">
            
              </select>
            </div>

            <div class="form-group col-6">
              <label>Color</label>
              <select name="color_id" class="form-control">
               
              </select>
            </div>
            <div class="form-group col-6">
              <label>Size</label>
              <select name="size_id" class="form-control">
              
              </select>
            </div>
            <div class="form-group col-6">
              <label>Recent</label>
              <input type="checkbox" name="is_recent"  />
            </div>
            <div class="form-group col-6">
              <label>Featured</label>
              <input type="checkbox" name="is_featured" ?> />
            </div>
            <button class="btn btn-success">Add</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

</body>