<?php 

class Product extends DbConn 
{
    protected $sku;
    protected $name;
    protected $price;
    protected $size;
    protected $weight;
    protected $height;
    protected $length;
    protected $width;

    public function __construct()
    {
        
    }

    /**
     * Get the value of sku
     */ 
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set the value of sku
     *
     * @return  self
     */ 
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @return  self
     */ 
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of dimensions
     */ 
    public function getDimensions()
    {
        return $this->dimensions;
    }

    public function getDvdValidation()
    {
        $mydb = new DbConn();
        $sku = $_POST['sku'];
        $sql = "SELECT name from dvd where sku ='$sku'";
        $data = $mydb->read($sql);
        if(is_array($data))
        {
            return 1;
        }
        return 0;
    }
    public function getBookValidation()
    {
        $mydb = new DbConn();
        $sku = $_POST['sku'];
        $sql = "SELECT name from book where sku ='$sku'";
        $data = $mydb->read($sql);
        if(is_array($data))
        {
            return 1;
        }
        return 0;
    }
    public function getFurnitureValidation()
    {
        $mydb = new DbConn();
        $sku = $_POST['sku'];
        $sql = "SELECT name from furniture where sku ='$sku'";
        $data = $mydb->read($sql);
        if(is_array($data))
        {
            return 1;
        }
        return 0;
    }

    public function getDvd()
    {
        $query= "SELECT * FROM dvd";
        $mydb = new DbConn();
        $data = $mydb->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }
    public function getBook()
    {
        $query= "SELECT * FROM book";
        $mydb = new DbConn();
        $data = $mydb->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    public function getFurniture()
    {
        $query= "SELECT * FROM furniture";
        $mydb = new DbConn();
        $data = $mydb->read($query);
        if(is_array($data))
        {
            return $data;
        }
        return false;
    }

    public function deleteProduct()
    {
        $mydb = new DbConn();

        if(isset($_POST['delete']))
        {
            if(isset($_POST['check']))
            {
                foreach($_POST['check'] as $delete_sku)
                {
                    $query_d = "DELETE FROM dvd WHERE sku='$delete_sku'";
                    $mydb->write($query_d);

                }
            }
            if(isset($_POST['checkbook']))
            {
                foreach($_POST['checkbook'] as $delete_sku)
                {
                    $query_d = "DELETE FROM book WHERE sku='$delete_sku'";
                    $mydb->write($query_d);

                }
            }
            if(isset($_POST['checkfurn']))
            {
                foreach($_POST['checkfurn'] as $delete_sku)
                {
                    $query_d = "DELETE FROM furniture WHERE sku='$delete_sku'";
                    $mydb->write($query_d);

                }
            }
        }
    }

    public function addProducts()
    {
        $mydb = new DbConn();
        $dvdValue = new Product();
        $bookValue = new Product();
        $furnitureValue = new Product();

          if(isset($_POST['submit']))
          {
            try{
             
              $sku = $_POST['sku'];
              $names = $_POST['name'];
              $price = $_POST['price'];

              
                if(!empty($_POST['productType'])){
                    $dvdValue->getDvdValidation();
                    $bookValue->getBookValidation();
                    $furnitureValue->getFurnitureValidation();

                  if(($_POST['productType'] =="DVD")&&(!empty($_POST['size']))){
                    $size = $_POST['size'];

                    if(($dvdValue->getDvdValidation() < 1) && ($bookValue->getBookValidation() < 1) && ($furnitureValue->getFurnitureValidation() < 1)){

                            $query = "INSERT INTO dvd (sku,name,price,size) VALUES ('$sku','$names','$price','$size')";
                            $result = $mydb->write($query);
                            if($result){
                                header("location:../public/index.php");
                            
                            }
                            else{echo "invalid";}
                    }
                    else{echo "sku exists";}
                  }

                  elseif(($_POST['productType'] =="Book")&&(!empty($_POST['weight']))){
                    
                    $weight = $_POST['weight'];

                    if(($dvdValue->getDvdValidation() < 1) && ($bookValue->getBookValidation() < 1) && ($furnitureValue->getFurnitureValidation() < 1)){

                        $query = "INSERT INTO book (sku,name,price,weight) VALUES ('$sku','$names','$price','$weight')";
                        $result = $mydb->write($query);
                        if($result){
                            header("location:../public/index.php");
                            
                        }else{
                        echo "invalid";}
                    }
                    else{echo "sku exists";}

                  }


                  elseif(($_POST['productType'] =="Furniture")&&(!empty($_POST['height']))&&(!empty($_POST['width']))
                  &&(!empty($_POST['length']))){
                    $height = $_POST['height'];
                    $width = $_POST['width'];
                    $length = $_POST['length'];

                    if(($dvdValue->getDvdValidation() < 1) && ($bookValue->getBookValidation() < 1) && ($furnitureValue->getFurnitureValidation() < 1)){


                        $query = "INSERT INTO furniture (sku,name,price,height,width,length) VALUES ('$sku','$names','$price','$height','$width','$length')";
                        $result = $mydb->write($query);
                        if($result){
                        header("location:../public/index.php");
                        }
                        else{echo "invalid";}
                    }
                    else{echo "sku exists";}

                  }
                  else{echo "fill missing field";}
                }
                else{echo "Please select Type switcher";}
            }
            catch(Exception $e){ 
              echo "error";
            }
              
          }
    
    }

}