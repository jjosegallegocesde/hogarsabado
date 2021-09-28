<?php

namespace App\Controllers;

class Productos extends BaseController{
    
    public function index(){
        return view('registroProductos');
    }

    public function registrar(){
       
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipoAnimal=$this->request->getPost("tipoAnimal");

        $datosProducto=array(
            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipoAnimal"=> $tipoAnimal
        );

        print_r($datosProducto);

    }


}
