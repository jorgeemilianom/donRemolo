<?php

class product{
    public $id;
    public $product;
    public $price;
    public $description;
    public $img;
    public $category;

    public function setid($value){
        $this->id = $value;
    }
    public function setproduct($value){
        $this->product = $value;
    }
    public function setprice($value){
        $this->price = $value;
    }
    public function setdescription($value){
        $this->description = $value;
    }
    public function setimg($value){
        $this->img = $value;
    }
    public function setcategory($value){
        $this->category = $value;
    }

}


?>