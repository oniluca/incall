<?php

require_once('models/Cliente.php');

abstract class BaseController{

    private $view;
    private $model;

    public function __construct(){
        
    }
   //   protected function render($view = "", $params = array()){
          
   //      $this ->view = new ViewController($view,$params); 
   //   }

 
   protected function indexList($table,$model){
         $this->model = new $model();
         $dataToRender = $this->model->toList($table);
         return ($dataToRender);
   }


   protected function getSpecificData($table,$model,$condition){
    $this->model = new $model();
    $dataToRender = $this->model->toList($table,$condition);
    // $dataToRender = mysqli_fetch_assoc($dataToRender);
    return ($dataToRender);
}
}

?>