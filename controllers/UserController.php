<?php 
 	require_once('models/User.php');
	
	class UserController extends BaseController{

		// atributos
		private $user;

		// metodos

		public function __construct(){
			$this->user = new User();
		}

		

		 public function index(){
			$result=$this->user->index();
			return $result;
		 }

		 public function show($id){
			$this->user->set("id",$id);
			$result= $this->user->show();
			return $result;

		 }


		public function create($user,$permissions){
			$this->user->set("user",$user);
			$this->user->set("permissions",$permissions);
			$result= $this->user->create();
			return $result;
			
		}

		public function update($id,$user,$permissions){
			$this->user->set("id",$id);
			$this->user->set("user",$user);
			$this->user->set("permissions",$permissions);
			$result= $this->user->update();
			return $result;
			
		}

		public function updateProfile($id,$user){
			$this->user->set("id",$id);
			$this->user->set("user",$user);
			$result= $this->user->updateProfile();
			return $result;

		}


		public function updatePassword($id,$currentPassword,$newPassword){
			if($currentPassword === $_SESSION['password']){
				$this->user->set("id",$id);
				$this->user->set("password",$newPassword);
				$result= $this->user->updatePassword();
				return $result;
			}

		}

		public function destroy($id){
			$this->user->set("id",$id);
			$result = $this->user->destroy();
			return $result;

		}


		}

 ?>