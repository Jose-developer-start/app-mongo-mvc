<?php 


    class facturaModel{
        private $BD;
        public function __construct()
        {
            $this->BD = new BD();
        }

        public function get(){
            //Return facturas
            $facturas = $this->BD::connect()->facturas;
            return $facturas->find();
        }

        public function find(array $id){
            $facturas = $this->BD::connect()->users;
            return $facturas->find($id);
        }
        
        public function deleteUser($id){
            BD::connect()->users->deleteOne(['cod_cliente' => $id]);
            
        }
    }