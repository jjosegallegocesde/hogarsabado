<?php namespace App\Controllers;

use App\Models\Modelopersonas;

class RegistroControlador extends BaseController{
    
    public function index(){
		return view('vistaRegistro');
	}

	public function registrar(){

		//1. Recibir los datos desde la vista
		$nombre=$this->request->getPost("nombre");
		$edad=$this->request->getPost("edad");
		$cedula=$this->request->getPost("cedula");
		$poblacion=$this->request->getPost("poblacion");
		$descripcion=$this->request->getPost("descripcion");
		$foto=$this->request->getPost("foto");

		//2. Organizar los datos que llegan de las vistas
		// en un arreglo asociativo 
		//(las claves deben ser iguales a los campos o atributos de la tabla en BD)
		$datosEnvio=array(
			"nombre"=>$nombre,
			"edad"=>$edad,
			"cedula"=>$cedula,
			"poblacion"=>$poblacion,
			"descripcion"=>$descripcion,
			"foto"=>$foto
		);

		//3. Crear un objeto del MODELO para porder 
		//realizar la transacción en BD
		$modeloPersonas= new Modelopersonas();

		//4. Utilizar el modelo para insertar los datos
		try{
			
			$modeloPersonas->insert($datosEnvio);
			$mensaje="Registro agregado con éxito";
			return (redirect()->to(base_url("public/"))->with('mensaje',$mensaje));



		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

	public function buscar(){
		
		//1. Crear un objeto del Modelo
		$modeloPersonas=new ModeloPersonas();

		//2. Ejecutar la busqueda
		try{

			//2.1 Ejecutar findALL
			$datosConsultados=$modeloPersonas->findAll();

			//2.2 Preparar los datos para la vista
			$datosParaVista=array("usuarios"=>$datosConsultados);

			//2.3 LLamar a la vista que va a mostrar los datos
			return view('vistaListado',$datosParaVista);


		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

	public function eliminar($id){

		//1. Crear un objeto del modelo
		$modeloPersonas=new ModeloPersonas();

		//2. Ejecutar la funcion delete del modelo identificando el registro a eliminar
		try{

			$modeloPersonas->where('id',$id)->delete();
			echo("Usuario eliminado con exito");

		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

	public function editar($id){

		//1. Recibir los datos desde la vista
		$nombre=$this->request->getPost("nombreEditar");
		$descripcion=$this->request->getPost("descripcionEditar");

		//2. Organizar los datos que llegan de las vistas
		// en un arreglo asociativo 
		//(las claves deben ser iguales a los campos o atributos de la tabla en BD)
		$datosEnvio=array(
			"nombre"=>$nombre,
			"descripcion"=>$descripcion	
		);

		//3. Crear un objeto del MODELO para porder 
		//realizar la transacción en BD
		$modeloPersonas= new Modelopersonas();

		//4. Ejecutar el metodo update del modelo
		try{

			$modeloPersonas->update($id,$datosEnvio);
			$mensaje="Registro editado con exito";
			
		}catch(\Exception $error){

			echo($error->getMessage());

		}
		

		

	}

	//--------------------------------------------------------------------

}
