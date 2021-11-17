<?php 


    class userModel{
        private $BD;
        public function __construct()
        {
            $this->BD = new BD();
        }

        public function get(){
            //Return factura_parcial
            $clientes = $this->BD::connect()->clientes;
            return $clientes->find();
        }

        public function find(array $id){
            $clientes = $this->BD::connect()->clientes;
            return $clientes->findOne($id);
        }
        
        public function deleteUser($id){
            BD::connect()->clientes->deleteOne(['cod_cliente' => $id]);
            
        }
    }