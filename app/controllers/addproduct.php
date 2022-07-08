<?php 
class AddProduct extends Controller
{
    function index ()
    {
        $addProd = new Product();
        $data['addData']=$addProd->addProducts();
        $data['page_title']="Add Product";
        $this->view("addproduct",$data);
    }
    
}