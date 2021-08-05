<?php
    require_once('models/Model.php');
    
    class Cliente extends Model{

        protected $dni;
		protected $fullname;
		protected $address;
		protected $location;
		protected $province;
		protected $postalCode;
		protected $email1;
		protected $email2;
		protected $assets;
		protected $salaryBonus;
		protected $business;
		protected $companyAddress;
		protected $companyPhone;
     

        public function __construct(){
            parent::__construct();
            
        }

        
        public function create (){
            $query = "INSERT into clientes (DNI,ape_nom,direccion,localidad,provincia,cod_postal,email1,
            email2,fec_alta,fec_modi,fec_baja,bienes,bono_sueldo,emp_bono,dire_emp_bono,tel_emp_bono,user) values(
                '$this->dni','$this->fullname','$this->address','$this->location','$this->province',
                '$this->postalCode','$this->email1','$this->email2',CURDATE(),'0000-00-00','0000-00-00','$this->assets',
                '$this->salaryBonus','$this->business','$this->companyAddress','$this->companyPhone', $_SESSION[id] ) ";
    
            $result = $this->returnQuery($query);
            return $result;

        }


        public function update(){
            $query = "UPDATE clientes SET DNI='$this->dni',ape_nom='$this->fullname',direccion='$this->address',
            localidad='$this->location',provincia='$this->province',cod_postal='$this->postalCode',
            email1='$this->email1',email2='$this->email2',fec_modi= CURDATE(),bienes='$this->assets',
            bono_sueldo='$this->salaryBonus',emp_bono='$this->business',dire_emp_bono='$this->companyAddress',
            tel_emp_bono='$this->companyPhone' where DNI ='$this->dni'";
           $result = $this->returnQuery($query);
            return $result;
        }


        public function destroy(){
            $query="DELETE from clientes where DNI='$this->dni'";
            $result = $this->returnQuery($query);
            return $result;
        }


        
    }



?>