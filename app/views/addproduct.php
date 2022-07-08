<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Add</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/styles1.css" rel="stylesheet">
</head>

<body>
  <form id="product_form" method="post" >
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a>Product Add</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
            <button type="submit" name="submit" id="save-product-btn" 
          onclick="location.reload">Save</button>
            <a href="index.php" class="navbar__menu--links" id="cancel-btn">Cancel</a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div style="max-width: 500px; margin: 0 auto;">
            <div class="border border-secondary round p-3">
                <div class="form-group row m-2">
                    <label class="col-sm-4 col-form-label">SKU</label>
                    <div class="col-sm-8">
                    <input type="text" id="sku" name="sku" class="form-control" required minlength="1" maxlength="45"/>
                    </div>
                </div>

                <div class="form-group row m-2">
                    <label class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" id="name" name="name" class="form-control" required minlength="1" maxlength="45"/>
                    </div>
                </div>
                <div class="form-group row m-2">
                    <label class="col-sm-4 col-form-label">Price ($)</label>
                    <div class="col-sm-8">
                        <input type="text" id="price" name="price" class="form-control" required minlength="1" maxlength="45"/>
                    </div>
                </div>
                <div class="form-group row m-2">
                    <label class="col-sm-5 col-form-label">Type Switcher</label>
                    <div class="col-sm-7">
                        <select id="productType" name="productType" onChange="prodType(this.value);">
                            <option value="" disabled selected hidden>Select&nbsp</option>
                            <option id="DVD" value="DVD">DVD</option>
                            <option id="Furniture" value="Furniture">Furniture</option>
                            <option id="Book" value="Book">Book</option>
                        </select>
                    </div>
                </div>
                
                <div class="fieldbox" id="dvd_attributes">
                    <div class="border border-secondary round p-3">
                        <div class="form-group row m-2">
                            <label class="col-sm-4 col-form-label">Size (MB)</label>
                            <div class="col-sm-8">
                                <input type="text" name="size" id="size" class="form-control" minlength="1" maxlength="45"/>
                            </div>
                            
                        </div>
                        <p align="center">Please provide the size of the DVD in MBs</p>
                    </div>
                </div>
                <div class="fieldbox" id="book_attributes">
                    <div class="border border-secondary round p-3">
                        <div class="form-group row m-2">
                            <label class="col-sm-4 col-form-label">Weight (KG)</label>
                            <div class="col-sm-8">
                                <input type="text" name="weight" id="weight" class="form-control" minlength="1" maxlength="45"/>
                            </div>
                        </div>
                        <p align="center">Please provide the weight of the Book</p>
                    </div>
                </div>
                <div class="fieldbox" id="furniture_attributes">
                <div class="border border-secondary round p-3">
                    <div class="form-group row m-2">
                        <label class="col-sm-4 col-form-label">Height (CM)</label>
                        <div class="col-sm-8">
                            <input type="text" name="height" id="height" class="form-control" minlength="1" maxlength="45"/>
                        </div>
                    </div>
                    <div class="form-group row m-2">
                        <label class="col-sm-4 col-form-label">Width (CM)</label>
                        <div class="col-sm-8">
                            <input type="text" name="width" id="width" class="form-control" minlength="1" maxlength="45"/>
                        </div>
                    </div>
                    <div class="form-group row m-2">
                        <label class="col-sm-4 col-form-label">Length (CM)</label>
                        <div class="col-sm-8">
                            <input type="text" name="length" id="length" class="form-control" minlength="1" maxlength="45"/>
                        </div>
                    </div>
                    <p align="center">Please provide the Height, Width, Length of the furniture</p>
                </div>
            </div> 
        </div>
    </section><!-- End Hero -->
    <div align="center">
        <?php 
            $data['addData'];
        ?>

    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container py-4" align="center">
        Scandiweb Test assignment
    </div>
  </footer><!-- End Footer -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form.js"></script>

</body>

</html>