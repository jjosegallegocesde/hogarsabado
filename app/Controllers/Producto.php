<?php

namespace App\Controllers;

class Producto extends BaseController{
    
    public function index(){
        return view('registroProducto');
    }
}