<?php 
	
		require_once('models/Cliente.php');

	class ClientController extends BaseController{

		public $client;

		public function __construct(){
			$this->client = new Cliente;
		}


		public function index(){ 
			$table = "clientes";
			$model = "cliente";
			$dataToRender = $this->indexList($table,$model);
			return ($dataToRender);
		}

		public function show($id){
			$table = "clientes";
			$model = "cliente";
			$condition = "where DNI= $id";
			$dataToRender = $this->getSpecificData($table,$model,$condition);
			return ($dataToRender);
			
		}

		public function create($dni,$fullname,$address,$location,$province,$postalCode,$email1,$email2,$assets,$salaryBonus,$business,$companyAddress,$companyPhone){
			$this->client->set("dni",$dni);
			$this->client->set("fullname",$fullname);
			$this->client->set("address",$address);
			$this->client->set("location",$location);
			$this->client->set("province",$province);
			$this->client->set("postalCode",$postalCode);
			$this->client->set("email1",$email1);
			$this->client->set("email2",$email2);
			$this->client->set("assets",$assets);
			$this->client->set("salaryBonus",$salaryBonus);
			$this->client->set("business",$business);
			$this->client->set("companyAddress",$companyAddress);
			$this->client->set("companyPhone",$companyPhone);

			$result = $this->client->create();
			return $result;
		}

		public function store(){
			// crea contra la db
		}

		public function edit(){
			// carga a la vista los datos  a actualizar
		}

		public function update($dni,$fullname,$address,$location,$province,$postalCode,$email1,$email2,$assets,$salaryBonus,$business,$companyAddress,$companyPhone){
			$this->client->set("dni",$dni);
			$this->client->set("fullname",$fullname);
			$this->client->set("address",$address);
			$this->client->set("location",$location);
			$this->client->set("province",$province);
			$this->client->set("postalCode",$postalCode);
			$this->client->set("email1",$email1);
			$this->client->set("email2",$email2);
			$this->client->set("assets",$assets);
			$this->client->set("salaryBonus",$salaryBonus);
			$this->client->set("business",$business);
			$this->client->set("companyAddress",$companyAddress);
			$this->client->set("companyPhone",$companyPhone);

			$result = $this->client->update();
			return $result;
		}

		public function destroy($dni){
			// elimina
			$this->client->set("dni",$dni);
			
			$result = $this->client->destroy();
			return $result;
		}


	}



 ?>