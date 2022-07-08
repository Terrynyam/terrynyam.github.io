<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product List</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/styles1.css" rel="stylesheet">
</head>

<body>
  <form method="POST" >
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a>Product List</a></h1>
      
      <nav id="navbar" class="navbar">
        <ul>
          <a href="addproduct" class="navbar__menu--links" id="add-product-btn">ADD</a>
          <button type="submit" name="delete" id="delete-product-btn" 
          onclick="location.reload">MASS DELETE</button>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="container py-5">
      <div class="row mt-4">
      <?php if(is_array($data['thedvd'])): ?> 
        <?php foreach($data['thedvd'] as $row): ?>    
          <div class="col-md-3" style="margin-bottom: 20px;">

            <div class="card">
            
              <div class="card-body" align="center">
                <input class="delete-checkbox" style="margin-right: 200px;" type="checkbox" name="check[]" value="<?=$row->sku?>">
                <p class="card-text"><?=$row->sku?></p>
                <p class="card-text"><?=$row->name?></p>
                <p class="card-text"><?=$row->price?> $</p>
                <p class="card-text">Size: <?=$row->size?> MB</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <?php if(is_array($data['thebook'])): ?> 
        <?php foreach($data['thebook'] as $row): ?>    
          <div class="col-md-3" style="margin-bottom: 20px;">

            <div class="card">
            
              <div class="card-body" align="center">
                <input class="delete-checkbox" style="margin-right: 200px;" type="checkbox" name="checkbook[]" value="<?=$row->sku?>">
                <p class="card-text"><?=$row->sku?></p>
                <p class="card-text"><?=$row->name?></p>
                <p class="card-text"><?=$row->price?> $</p>
                <p class="card-text">Weight: <?=$row->weight?>KG</p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <?php if(is_array($data['thefurniture'])): ?> 
        <?php foreach($data['thefurniture'] as $row): ?>    
          <div class="col-md-3" style="margin-bottom: 20px;">

            <div class="card">
            
              <div class="card-body" align="center">
                <input class="delete-checkbox" style="margin-right: 200px;" type="checkbox" name="checkfurn[]" value="<?=$row->sku?>">
                <p class="card-text"><?=$row->sku?></p>
                <p class="card-text"><?=$row->name?></p>
                <p class="card-text"><?=$row->price?> $</p>
                <p class="card-text">Dimensions: <?=$row->height?>x<?=$row->width?>x<?=$row->length?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
    
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4" align="center">
        Scandiweb Test assignment
    </div>
  </footer><!-- End Footer -->
     <?php 
     $data['del'];
     ?>
  <script src="assets/js/main.js"></script>
</body>

</html> 

<!-- //$mydel = new Product();
//var_dump($mydb->getProduct()); -->