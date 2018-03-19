<?php

// array of errors costumizable, ready to fit in, print or return the costumizable errors

class errorClass{

    public $collection = [
        '400' => 'Bad request',
        '404' => 'Page not found',
        '500' => 'Internal server error'
  
    ];

    public function newError($code){
        return $this->collection[$code];
    }

}


$e = new errorClass;
$e->newError('404');
//print_r($e->newError('404'));