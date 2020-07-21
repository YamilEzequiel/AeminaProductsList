<?php

    class ProductsModel extends Model{
        

        public function __construct(){
            parent::__construct();
        }
        
        public static function AllProducts($go,$end){
            $db=new Database;
            $query=$db->connect()->prepare("select * from products limit $go,$end");
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            $json = array();
            $json=$result;
            echo json_encode($json);
        }

        public static function SearchProducts($Search){
            $db=new Database;
            $query=$db->connect()->prepare("select * from products where name like '%$Search%' limit 5");
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            $json = array();
            $json=$result;
            echo json_encode($json);
        }

        public static function ShearhOneProducts($id){
            $db=new Database;
            $query=$db->connect()->prepare("select * from products where id = '$id' ");
            $query->execute();
            $result=$query->fetchAll(PDO::FETCH_ASSOC);
            $json = array();
            $json=$result;
            echo json_encode($json);
        }

        public static function AddProducts($name,$units,$price,$photo,$category,$description, $origin, $provider, $entry, $modification){
            $db=new Database;
            $date = date("Y-m-d H:i:s");     
            $query=$db->connect()->prepare("insert into products (name,units,price,photo,category,description, origin, provider, entry, modification) VALUES ('$name','$units','$price','$photo','$category','$description', '$origin', '$provider', '$date', '$modification')");
            $query->execute();
        }

        public static function EditProducts($name,$units,$price,$photo,$category,$description, $origin, $provider,$id){
            $db=new Database;
            $date = date("Y-m-d H:i:s");     
            $query=$db->connect()->prepare("update products set name='$name', units='$units', price='$price', photo ='$photo' ,category='$category', description='$description', origin='$origin', provider='$provider', modification='$date' where id='$id'");
            $query->execute();
        }

        public static function DeleteProducts($ID){
                $db=new Database;
                $query=$db->connect()->prepare("delete from products where id='$ID'");
                $query->execute();
        }

    }





?>