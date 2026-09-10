<?php

    class Conectar {
        protected $dbh;

        public function Conexion(){
            try{

                $this->dbh = new PDO(

                    "mysql:host=localhost;dbname=ventas;charset=utf8",
                    "root",
                    "",
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]

                );

                echo "Conexion exitosa a la Base de Datos";
                return $this->dbh;

            }catch(Exepcion $e){

                echo "Error BD:".$e->getMessage();
                die();

            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAME 'utf8'");
        }
    }

    $Conexion = new Conectar;
    $Conexion->Conexion();


?>