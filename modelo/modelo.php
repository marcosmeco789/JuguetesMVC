<?php 


    class Juguete
    {
        private $juguetes = [];

        private $dbc;

        public function __construct() {
            $this->dbc = new PDO("mysql:host=localhost;dbname=juguetes_mvc","root","");
        }


        public function setJuguete($nombre,$precio,$proveedor,$descuento,$imagen) {
            $sql = "INSERT INTO juguetes (nombre,precio,proveedor,descuento,imagen) VALUES ('{$nombre}','{$precio}','{$proveedor}','{$descuento}','{$imagen}')";
            $resultado = $this->dbc->query($sql);
            return $resultado;
        }


        public function getJuguetes() {
            $sql = "SELECT * FROM juguetes";
            foreach ($this->dbc->query($sql) as $row) {
                $this->juguetes[] = $row;
            }
            return $this->juguetes;
        }

        public function getJuguete($id) {
            $sql = "SELECT * FROM juguetes WHERE id = '{$id}'";
            foreach ($this->dbc->query($sql) as $row) {
                $this->juguetes[] = $row;
            }
            return $this->juguetes;
        }

        public function actualizarJuguete($id,$nombre,$precio,$proveedor,$descuento,$imagen) {
            $sql = "UPDATE juguetes SET nombre = '{$nombre}', precio = '{$precio}', proveedor = '{$proveedor}', descuento = '{$descuento}', imagen = '{$imagen}' WHERE id = '{$id}'";
            $resultado = $this->dbc->query($sql);
            return $resultado;
        }

        public function eliminarJuguete($id) {
            $sql = "DELETE FROM juguetes WHERE id = '{$id}'";
            $resultado = $this->dbc->query($sql);
            return $resultado;
        }
    }



    

?>