<?php

namespace Controller ;

include "Traits/ResponeFormatter.php";
include "Controllers/Controller.php";

use Traits\ResponeFormatter;

class ProductController extends Controller {
    use ResponeFormatter;

    public function __construct (){
        $this->controllerName = "Get All Product";
        $this ->controllerMethod = "Get";

    }
    public function getAllProduct (){
        //array dummy data
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spaghetti",
            "Jus Jambu",

        ];
        $respone = [
            "controller _attribute" => $this->getControllerAttribute (),

            "Product" => $dummyData

        ];
        return $this->responeFormatter(200, "Succes", $respone);

    }

};