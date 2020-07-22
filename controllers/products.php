<?php

    class Products extends Controller{

        function __construct(){
            parent::__construct();
        }

        function render(){
            $this->view->render('products/index','Listado de Productos');
        }

        function All(){
            ProductsModel::AllProducts($_GET['go'],$_GET['end']);
        }

        function Search($param = " "){
            $date = $param[0];
            ProductsModel::SearchProducts($date);
        }

        function Edit(){
            $path = "public/images/products/";
            $path = $path . basename($_FILES['imagen']['name']);        
            if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
                ProductsModel::EditProducts($_POST['name'],$_POST['units'],$_POST['price'],$path,$_POST['category'],$_POST['description'],$_POST['origin'],$_POST['provider'],$_POST['id']);
            } else{
                 ProductsModel::EditProducts($_POST['name'],$_POST['units'],$_POST['price'],$path,$_POST['category'],$_POST['description'],$_POST['origin'],$_POST['provider'],$_POST['id']);
            }
        }


        function Delete(){
            ProductsModel::DeleteProducts($_POST['id']);
        }

        function SearchOne($param = " "){
            $date = $param[0];
            ProductsModel::ShearhOneProducts($date);
        }

        function Add(){
                $path = "public/images/products/";
                $path = $path . basename($_FILES['imagen']['name']);        
                if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
                    ProductsModel::AddProducts($_POST['name'],$_POST['units'],$_POST['price'],$path,$_POST['category'],$_POST['description'], $_POST['origin'], $_POST['provider'], $_POST['entry'], $_POST['modification']);
                } else{
                    echo "Ha ocurrido un error, trate de nuevo!";       
                }
 
        }
            

    }


?>