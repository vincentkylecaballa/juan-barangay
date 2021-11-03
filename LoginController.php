<?php
require_once('models/models.php');

class  LoginController{
public $model;

    public function __construct()
    {
        $this->models=new Model();
    }

    public function invoke(){

        $result=$this->models->getlogin();

        if ($result == 'login')
        {
            include 'views/home.blade.php';
        }
        else{
            include 'views/login.blade.php';
        }
        

    }   

}
?>
