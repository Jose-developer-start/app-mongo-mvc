<?php 


    class facturaModel{
        private $BD;
        public function __construct()
        {
            $this->BD = new BD();
        }

        public function get(){
            //Return factura_parcial
            $facturas = BD::connect()->facturas->aggregate([
                [
                    '$lookup' => [
                        'from' => 'clientes',
                        'localField' => 'cod_cliente',
                        'foreignField' => 'cod_cliente',
                        'as' => 'clientes'
                    ]
                ]
            ]);
            return $facturas;
        }

        public function find(array $id){
            $clientes = $this->BD::connect()->clientes;
            return $clientes->find($id);
        }
        
        public function deleteUser($id){
            BD::connect()->clientes->deleteOne(['cod_cliente' => $id]);
            
        }
        public function updateUser(array $data, $id){
            BD::connect()->clientes->updateOne(
                ['cod_cliente' => $id],
                ['$set' => [
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'municipio' => $data['municipio'],
                    'telefono' => $data['telefono']
                ]]
            );
        }
        public function lookup(){
            $data = BD::connect()->facturas->aggregate([
                [
                    '$lookup' => [
                        'from' => 'clientes',
                        'localField' => 'cod_cliente',
                        'foreignField' => 'cod_cliente',
                        'as' => 'clientes'
                    ]
                ]
            ]);
            return $data;
        }
    }