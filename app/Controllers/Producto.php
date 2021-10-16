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

        // Se aplican validaciones
        if($this->validate('formularioProducto')){

            echo("Todo bien apa..");

        }else{

            $mensaje="Tenemos campos sin llenar";
            return redirect()->to(site_url('/productos/registro'))->with('mensaje',$mensaje);
        }


        //2. Construir un arreglo asociativo con los datos recibidos
       /* $datos=array(

            "producto"=>$producto,
            "foto"=>$foto,
            "precio"=>$precio,
            "descripcion"=>$descripcion,
            "tipo"=>$tipo
        );

        print_r($datos);*/

    }
}