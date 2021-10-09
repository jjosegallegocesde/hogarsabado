<?php

namespace App\Controllers;

class Producto extends BaseController{
    
    public function index(){
        return view('registroProducto');
    }

    
    public function registrar(){
        
        //1. Recibir los datos del formulario
        $producto=$this->request->getPost("producto");
        $foto=$this->request->getPost("foto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        //2. Construir un arreglo asociativo con los datos recibidos
        $datos=array(

            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);

    }
}