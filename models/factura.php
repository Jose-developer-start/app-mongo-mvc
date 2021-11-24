<?php 


    class facturaModel{
        private $BD;
        public function __construct()
        {
            $this->BD = new BD();
        }

        public function get(){
            //Return factura
            $facturas = BD::connect()->facturas->aggregate([
                [
                    '$lookup' => [
                        'from' => 'clientes',
                        'localField' => 'cod_cliente',
                        'foreignField' => 'cod_cliente',
                        'as' => 'clientes'
                    ]
                    ],
                    [
                        '$unwind' => '$clientes' 
                    ],
                [
                    '$lookup' => [
                        'from' => 'productos',
                        'localField' => 'cod_productos',
                        'foreignField' => 'cod_productos',
                        'as' => 'productos'
                    ]
                    ],
                    [
                        '$unwind' => '$productos' 
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
        public function deleteFactura($id,$cod_cliente){

            BD::connect()->facturas->deleteOne(['num_factura' => $id]);
            //Eliminando un elemento de la factura clientes

            BD::connect()->clientes->updateOne(
                ['cod_cliente' => $cod_cliente],
                [
                    '$pull' => ['factura' => $id]
                ]
            );
            return true;
        }
    }