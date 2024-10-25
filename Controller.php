<?php

namespace Controller ;

class Controller  
{

    // variable Attributes
    var $controllerName;
    var $controllerMethod;

    // Method untuk mengambil atribut

    public function getControllerAttribute(){

        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod,
        ];
    }

}    


  
