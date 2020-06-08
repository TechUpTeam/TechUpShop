<?php 
    class Product{
        public $name;
        public $price;
        public $url;
        public function Product($name,$price,$url){
            $this->name=$name;
            $this->price=$price;
            $this->url=$url;
        }
    }
?>