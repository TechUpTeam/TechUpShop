<?php
    include_once("product.php");

    class Model {
        public function getProductList(){
            $Connect= new mysqli('localhost','root','','test') or die("Error Connect!");
            $sql = "SELECT id, title, content FROM product";
            $result = $conn->query($sql);
            return $result;
        } 
        public function getProduct($title){
            $Connect= new mysqli('localhost','root','','test') or die("Error Connect!");
            if ($conn->connect_error) {
                die("Kết nối thất bại: " . $conn->connect_error);
            }
            $sql = "SELECT id, title, content FROM product WHERE name=$title ";
            $result = $conn->query($sql);
            return $result;
        }
    }
?>