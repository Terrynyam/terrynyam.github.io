<?php 

class Controller 
{
    function view($view,$data = [])
    {
        if(file_exists("../app/views/" . $view . ".php"))
        {
            include "../app/views/" . $view . ".php";
        }
        else
        {
            include "../app/views/404.php";
        }
    }
}