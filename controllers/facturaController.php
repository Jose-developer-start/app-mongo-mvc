<?php

    class factura{
        private $model;
        public function __construct()
        {
            $this->model = new facturaModel();
        }
        public function index(){
            include_once "./views/index.php";

        }
        public function saludo(){
            echo "Saludos ";
        }

        public function user(){
            
            $id = $_GET['id'];
            $user = $this->model->find(['cod_cliente' => $id]);
            include_once "./views/user.php";
        }

        public function edit(){
            
            $id = $_GET['id'];
            $user = $this->model->find(['cod_cliente' => $id]);
            include_once "./views/edit-user.php";
        }

        public function eliminar_user(){
            $id = $_GET['id'];
            $result = $this->model->deleteUser($id);
            var_dump($result);
        }
        public function updateUser(){
            $cod_cliente = $_POST['cod_cliente'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $municipio = $_POST['municipio'];
            $telefono = $_POST['telefono'];
            
            $data = [
                "nombre" => $nombre,
                "apellido" => $apellido,
                "municipio" => $municipio,
                "telefono" => $telefono
            ];
            $result = $this->model->updateUser($data,$cod_cliente);
            header('Location:'.url()."?c=factura&m=user");
            //var_dump($result);
        }
    }