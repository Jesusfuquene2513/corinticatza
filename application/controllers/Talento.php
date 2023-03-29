<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Talento extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this-> load->model("TalentoModel");
        $this-> load-> helper(array('form','url'));
    }
	

	public function index()
	{

               
               
		
        $this->load->view('vistas/talento');   
	}


        


        public function cargar_talentos(){

             $resultado = $this -> TalentoModel -> cargar_talentos();

             foreach($resultado as $funcionario){

                $ruta = $funcionario->foto_perfil;
                
                 
                 
                if (strpos($ruta, 'http') !== false) {
                     $ruta_nueva = $ruta;
  
}else{
                 $ruta_nueva = "../administrador/".$ruta;    
                }
 echo '  <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
 <div class="team-item rounded p-4">
     <img class="img-fluid rounded mb-4" src="'.$ruta_nueva.'" alt="">
     <h5 class="nombre">'.$funcionario->nombre_funcionario.'</h5>
     <h6>'.$funcionario->cargo.'</h6>
    
   
 </div>
</div>';
             }

        }

	
}