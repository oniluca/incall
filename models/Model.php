<?php

class  Model{

        protected $host;
		protected $user;
		protected $pass;
		protected $db;
		protected $connection;

		public function __construct(){
			$this->host=HOST;
			$this->user=USER;
			$this->pass=PASS;
			$this->db=DB;

			$this->connection = new mysqli($this->host,$this->user,$this->pass);
			if($this->connection){
				mysqli_select_db($this->connection,$this->db);
			}
		}

		public function toList($table,$conditionals=false) {
           if($conditionals !=false){
				$query="select * from $table $conditionals"; 
				$result=$this->returnQuery($query);
				$result= mysqli_fetch_array($result);  
		   }else{
				$query="select * from $table";
				$result=$this->returnQuery($query);
		   }			
			return $result;
        }


		public function set($atribute, $content){
			$this->$atribute = $content;
		}


		//consulta que no devuelve nada
		public function simpleQuery($sql){
			$this->connection->query($sql);
			
		}

		//consulta que retorna resultado
		public function returnQuery($sql){
			$result = $this->connection->query($sql);
			return $result;	
			
		}


}

?>