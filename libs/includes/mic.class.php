<?php

class Mic{
    private $brand;
    public $model;
    public $color;
    public $price;
    public $usb_port;
    public $light;


    public static function testFunction(){
            printf("this is a static function , this can run without an object construction/initialization");
        
        }

    public function __construct($brand){
        printf("CONSTRUCTING OBJECT.......");
        $this->brand = ucwords($brand);
    }
    public function getbrand(){
        return $this->brand;
    }
    public function setlight($light){
        $this->light =$light;
    }

    private function getmodel(){
        return $this->model;
    }
        public function getModelProxy(){
            return $this->getmodel();
        }

    public function setmodel($model){  //to keepor convert upercase values:
        $this->model = ucwords($model); //UC WORD IN INBUILT FUNC

    }

    public function __destruct()
    {
        printf("   destructing object... brand: $this->brand   <br> ");
    }
}