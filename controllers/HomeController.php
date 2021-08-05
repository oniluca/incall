<?php

// require_once('models/Cliente.php');

class HomeController extends BaseController{

    public $parameter;
    

    public function __construct(){

        // $this->model = new Cliente();
        
    }

    public function index(){
        $table = "clientes";
        $model = "cliente";
        $dataToRender = $this->indexList($table,$model);
        // $dataToRender = $this->model->toList($table);
        // // $params= mysqli_fetch_assoc($params);
        // // // var_dump($params);
        // // var_dump($params);
		// 	// foreach( $params as $param){
		// 	// 	var_dump( $param);
		// 	// } 
        // $this->render('views/home', $params);
        //include_once('views/home.php');
        return ($dataToRender);
    }

    public function create(){
        // crea contra la vista
        echo("create");
        include_once('views/clients/create.php');
    }

    public function store(){
        // crea contra la db
        echo("store");
        include_once('views/clients/show.php');
    }

    public function edit($parametro){
        // carga a la vista los datos  a actualizar
        echo("edit");
        $this->parameter = $parametro;
       
        include_once('views/clients/edit.php');
    }

    public function update(){
        // actualiza contra la db
        echo("update");
    }

    public function destroy(){
        echo("destroy");
        // elimina
    }

    public function getParameters(){
        $parameters = $this->parameter;
        var_dump($this->parameter);
        return $parameters;
    }

}





?>