<?php

namespace Traits ;

// Disimulasikan ini train untuk formatter json respone
trait responeFormatter {
    public function responeFormatter ($code, $message, $data = null){
        return json_encode([
            "code" => $code,
            "message" => $message,
            "data" => $data,

        ]);
    }
    
}