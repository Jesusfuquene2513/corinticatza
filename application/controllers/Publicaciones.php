<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this-> load->model("BlogModel");
		
        $this-> load-> helper(array('form','url'));
    }
	public function index()
	{
		$this->load->view('vistas/publicacion');
	}
    
    
    public function cargar_publicaciones(){
       
        $resultado = $this -> BlogModel -> cargar_publicaciones_blog();
        
        foreach($resultado as $blog){
            $ruta = $blog->portada;
                
                 
                 
            if (strpos($ruta, 'http') !== false) {
                 $ruta_nueva = $ruta;

}else{
             $ruta_nueva = "../administrador/".$ruta;    
            }
           echo '<div class="col-xl-4 col-lg-6">

         <div class="card-body">
         <img src="'.$ruta_nueva.'" class="imagen-archivo" alt="" style="width:100%; height:380px;" id="'.$blog->tipo_elemento.'">
         <br>
         <br>
         <h4>'.$blog->titulo.'</h4>
         <br>
         
        
         <p style="color:black; line-height:30px">'.$blog->contenido.'</p>
         <br>
         <span style="padding:4px; color:white; background:#ec6414">Publicado por Corinticatza '.$blog->fecha_creacion.'</span>
         </div>
    
     </div>'; 
        }
        
    }

	
}
