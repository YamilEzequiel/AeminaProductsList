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
            $arr = array('mensaje'=>'Elimnado');
            echo json_encode($arr, JSON_PRETTY_PRINT,JSON_UNESCAPED_UNICODE);
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
                    $arr = array('mensaje'=>'Producto registrado');
                    echo json_encode($arr, JSON_PRETTY_PRINT,JSON_UNESCAPED_UNICODE);
                } else{
                      ProductsModel::AddProducts($_POST['name'],$_POST['units'],$_POST['price'],$path,$_POST['category'],$_POST['description'], $_POST['origin'], $_POST['provider'], $_POST['entry'], $_POST['modification']);
                    $arr = array('mensaje'=>'Error al registrar');
                    echo json_encode($arr, JSON_PRETTY_PRINT,JSON_UNESCAPED_UNICODE);
                }
 
        }
        
        
        function EditApp(){
            
                $imagen = $_POST['imagen'];
                
                if($_POST['entry']==="1"){
                   $path = $_POST['imagen'];
                }else{
                   $path = "public/images/products/".$_POST[name].".jpg";   
                   file_put_contents($path,base64_decode($imagen));
                }
            
                ProductsModel::EditProducts($_POST['name'],$_POST['units'],$_POST['price'],$path,$_POST['category'],$_POST['description'],$_POST['origin'],$_POST['provider'],$_POST['id']);
                    $arr = array('mensaje'=>'Producto registrado');
                    echo json_encode($arr, JSON_PRETTY_PRINT,JSON_UNESCAPED_UNICODE);
        }
        
        
        
        function AddApp(){
  
                $imagen = $_POST['imagen'];
                
                if($imagen===null){
                   $path = "public/images/products/noimg.png";   
                }else{
                   $path = "public/images/products/".$_POST[name].".jpg";   
                   file_put_contents($path,base64_decode($imagen));
                }
     
                ProductsModel::AddProducts($_POST['name'],$_POST['units'],$_POST['price'],$path,$_POST['category'],$_POST['description'], $_POST['origin'], $_POST['provider'], $_POST['entry'], $_POST['modification']);
                $arr = array('mensaje'=>'Producto registrado');
                echo json_encode($arr, JSON_PRETTY_PRINT,JSON_UNESCAPED_UNICODE);
      }
     
     
        function SearchApp(){
            ProductsModel::SearchProducts($_GET['search']);
        }
            

    }


?>