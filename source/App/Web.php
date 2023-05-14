<?php

namespace Source\App;
use League\Plates\Engine;
class Web
{
    private $view;
    public function __construct(){
        $this -> view=new Engine(__DIR__ . "/../../themes/web" , "php"); 
    } 

    public function home()
    {
        echo $this ->view -> render ("home");
    }


    public function login()
    {
       
        echo $this ->view -> render ("login");
    }

    public function alteration()
    {
       
        echo $this ->view -> render ("alteration");
    }
 public function register()
    {
       
        echo $this ->view -> render ("register");
    }
    public function cart()
    {
       
        echo $this ->view -> render ("cart");
    }

}