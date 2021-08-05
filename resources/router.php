<?php 
	class Router{

		public $parameter;

		//funcion que se encarga de cargar la vista dependiendo de que se elija en el menu
		public function loadView($view,$method=null){
			require_once('config/rutas.config.php');
			$methods = array('show','create','edit');
			$rutas= array('','home','clients','users','profile');
			
			//comprueba ruta obtenida con rutas permitidas
			foreach($rutas as $ruta){
				if($view === $ruta){
					if($method == null){
						switch ($view) {
							case '':
								include_once('views/home.php');
								
								break;
							case 'home':
								include_once('views/home.php');
								
								break;
							case $view:
								 include_once('views/'.$view.'/index.php');
								
								break;			
							
			
							default:
								 include_once('views/error.php');
								break;
						}
					}else{
						//si recibe un segundo parametro por url y es un metodo permitido setea controlador/metodo 
						if(in_array($method,$methods)){
							$viewMethod = $view."/".$method;
							include_once('views/'.$viewMethod.'.php');
							return $this->parameter;
						}
						
					}
					
				}
			}

			
		}

		//funcion que carga la vista por defecto si no recibe nada
		public function validateGet($url){
			if(empty($url)){
				include_once('controllers/HomeController.php');
                $controller = new HomeController;
			}else{
				return true;
			}
		}

		public function setParameter($parameter){
			$this->parameter = $parameter;
		}
		public function getParameter(){
			return $this->parameter;
		}

	}

 ?>