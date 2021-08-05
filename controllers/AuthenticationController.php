<?php   
        require_once('../models/User.php');

    class AuthenticationController{

        private $user;

        public function __construct(){
            $this->user = new User;

        }
        
       public function index(){
        header('location:'.HOME.'views/login.php');
       }

       
        public function login($userName,$password){
            $this->user->set('user',$userName);
			$this->user->set('password',$password);
			$result=$this->user->login();
			return $result;
        
        }

        public function logout(){
            $this->user->logout();
        }





    }
?>