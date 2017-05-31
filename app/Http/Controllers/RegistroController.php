<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RegistroController extends controller{
	
	public function Clases () {
		return view('registrar_clases');
	}
	
	public function RegistrarAlumno (){
		return view('registrar_alumno');
	}
	
	public function RegistrarProyecto () {
		return view('registrar_proyecto');
	}
	
	public function RegistrarCursos () {
		return view('registrar_cursos');
	}
}

?>