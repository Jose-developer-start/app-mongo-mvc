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

        public function eliminar_user(){
            $id = $_GET['id'];
            $result = $this->model->deleteUser($id);
            var_dump($result);
        }
    }