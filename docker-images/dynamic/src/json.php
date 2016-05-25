<?php

class RandStruct{
    var $id;
    var $length;
    var $string;

    function __construct(){
        $this->id = rand(0, 1000);
        $this->length = rand(2, 10);
        $this->string = $this->randString();
    }

    function randString(){
        $seed = str_split('abcdefghijklmnopqrstuvwxyz'
            .'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        shuffle($seed);
        $rand = '';
        foreach (array_rand($seed, $this->length) as $k) $rand .= $seed[$k];
        return $rand;
    }
}

echo json_encode(array(new RandStruct(), new RandStruct(), new RandStruct(), new RandStruct()));