<?php

class ViewController{
 
    protected $template;  
    protected $view;  
    protected $params;
    
    
    public function __construct($view, $params = array()){
        
        $this->view = $view;
        $this->params = $params;
        // var_dump($this->params);
        $this->render();
    }

    protected function render(){

            // $fileName = $this->view;
            // $this->template = $this->getViewContent($fileName);
            // echo $this->template;

            // $file_path = $this->view . '.php';
            // if(file_exists($file_path)){
            //     require_once($file_path);
            //     return ($this->params);

            // }
    }

    
    protected function getViewContent($fileName)
    {
        // $file_path = $fileName . '.php';
        // if(file_exists($file_path)){
        //     extract($this->params);//ACA EL ERROR
        //     ob_start();
        //     require($file_path);
        //     $template = ob_get_contents();
        //     ob_end_clean();
        //     return $template;
        // }else{
        // //   throw new Exception("Error No existe $file_path");
        // }
    }

}