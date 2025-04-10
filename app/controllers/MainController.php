<?php

class MainController{

    public function index(){

        echo "Hola";
        return "Vista";
    }

    public function show($id){

        return $id;
    }
}

?>