<?php 
	 require_once('Model.php');



	class User extends Model{

		//atributos

		protected $id;
		protected $user;
		protected $password;
		protected $permissions;

		public function __construct(){
            parent::__construct();
            
        }

		// metodos}

		public function login(){
			$query="SELECT * from users where username='$this->user' and password='$this->password'";
			$result = $this->returnQuery($query);

			if(!empty($result) && mysqli_num_rows($result)==1){
				
				session_start();
				$this->setSession($result);
				return true;
			}else{
				return false;
			}

		}

		public function setSession($result=null){
			if($result == null){
				$query = "SELECT * from users where id ='$this->id'";
				$result = $this->returnQuery($query);
			}
			$result=mysqli_fetch_assoc($result);
			$_SESSION['login']=$result['username'];
			$_SESSION['administrador']=$result['administrador'];
			$_SESSION['id'] = $result['id'];
			$_SESSION['password']=$result['password'];
			return $_SESSION;
		}
		
		public function logout(){

			session_start();
			session_unset();
			session_destroy();
		}

		public function index(){
			$id= $_SESSION['id'];
			$query= "SELECT  * from users where id <> '$id'";
			$result = $this->returnQuery($query);
			return $result;

		}

		public function show(){

			$query= "SELECT  * from users where id= $this->id";
			$result = $this->returnQuery($query);
			$result= mysqli_fetch_array($result);  
			return $result;
		}

		public function create(){
			$password=hash ( 'sha512' , $this->user ,true );
			$query="INSERT into users (username,password,fec_alta,fec_modi,fec_baja,administrador) 
			values ('$this->user','$password',CURDATE(),'0000-00-00','0000-00-00',$this->permissions)";
			echo $query;
			$result = $this->returnQuery($query);
			return $result;
		}

		public function update(){
			$query = "UPDATE users SET username='$this->user',administrador='$this->permissions',fec_modi= CURDATE()
			where id ='$this->id'";
           	$result = $this->returnQuery($query);		  
        	return $result;
		}

		public function updateProfile(){
			$query = "UPDATE users SET username='$this->user',fec_modi= CURDATE() where id ='$this->id'";
			$result = $this->returnQuery($query);
			if($result){
				$this->setSession();        	
			}
			return $result;
			
		}


		public function updatePassword(){
			$query = "UPDATE users SET password='$this->password',fec_modi= CURDATE() where id ='$this->id'";
           	$result = $this->returnQuery($query);
			if($result){
				$this->setSession();        	
			}		  
        	return $result;
		}


		public function destroy(){
			$query="DELETE from users where id='$this->id'";
            $result = $this->returnQuery($query);
            return $result;

		}

	}


	// $password=hash ( 'sha512' , $this->user ,true );
	// 		$query="INSERT into users (username,password,fec_alta,fec_modi,fec_baja,administrador) 
	// 		values ('$this->user','$password',CURDATE(),'0000-00-00','0000-00-00',$this->permissions)";
	// 		echo $query;
	// 		$result = $this->returnQuery($query);
	// 		return $result;
	







	// INSERT into users (username,password,fec_alta,fec_modi,fec_baja,administrador) values 
	// ('jonathan','O��}P2�*��`t�t|�N%���^�Ǜ��'�4*��5Dy��I����A��1������',
	// CURDATE(),'0000-00-00','0000-00-00',1)

	// INSERT into users (username,password,fec_alta,fec_modi,fec_baja,administrador) values 
	// ('usuario','��OҴ�R.[��j��H��������_�rN:��]���x��l ���a��t���Y���a8�',
	// CURDATE(),'0000-00-00','0000-00-00',0)



	// ǭD˭v*]��R��T����*8_#�����rcM���N�5�j������Q��S�Ɲ�ސw�
	// ǭD˭v*]��R��T����*8_#�����rcM���N�5�j������Q��S�Ɲ�ސw�
	// ǭD˭v*]��R��T����*8_#�����rcM���N�5�j������Q��S�Ɲ�ސw�

 ?>