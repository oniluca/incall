<?php

class Router{
    
    public $url;
    public $controller;
    public $method;
    public $param;
   
    public function __construct(){
        $this->setUrl();
        $this->setController();
        $this->setMethod();
        $this->setParam();
    }

    
    public function setUrl(){
        $this->url = explode('/', URL);
    }
    
    public function setController(){
        $this->controller = $this->url[2] === '' ? 'Home' : $this->url[2];
    }
    
    public function setMethod(){
        $this->method = ! empty($this->url[3]) ? $this->url[3] : 'index';
    }

    public function setParam(){
        $this->param = ! empty($this->url[4]) ? $this->url[4] : '';
    }
    
    public function getUrl(){
        return $this->url;
    }
    
    public function getController(){
        return $this->controller;
    }

    public function getMethod(){
        return $this->method;
    }
    
    public function getParam(){
        return $this->param;
    }
}