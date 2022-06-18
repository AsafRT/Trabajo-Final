<?php

    // Crear la clase conexion
    class Conexion {
        // Definir atributos para la conexión
        private $usuario="root";
        private $password="";
        private $servidor="localhost";
        private $base="future";

        // Crea un método
        public function Conectar() {
        // Iniciar el controlador de errores
        // Para capturar los posibles errores dentro del código
        // PDO

        // Código a evaluar para posibles errores que pueda existir
            try {
                $con = new PDO("mysql:host=$this->servidor; dbname=$this->base;", $this->usuario,$this->password);
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Base de datos conectada...";
                return $con;

            // muestra los errores encontrados dentro del código
            } catch (Exception $e) {
                echo "Se encontró un error: ".$e->getMesagge();
            }
        }

        public function LoginAccess($user, $psw){
            $arr_filas = null;
            $cn = $this->Conectar();
            $sql = "Select * from user_name where user_m=:user and pass_w=:psw";
            $rs = $cn->prepare($sql);

            $rs->bindParam(":user", $user);
            $rs->bindParam(":psw", $psw);

            $rs->execute();

            $nr = $rs->rowCount();

            $cn = null;

            return $nr;
        }

        public function Music_List(){
            $arr_filas = null;
            $cn = $this->Conectar();
            $sql = "select * from music_list";
            $rs = $cn->prepare($sql);
            $rs->execute();

            echo "<table class='table table-striped' style='max-width: 60%; margin: auto; margin-bottom: 20px'>";
            echo "<tr>";
            echo "<th>N</th>
                  <th>Código</th>
                  <th>Artista</th>
                  <th>Canción</th>
                  <th>Duración</th>
                  </tr>"; 
                  
            $i=1; // contador
            while ($arr_filas=$rs->fetch(PDO::FETCH_ASSOC)){
                echo "<tr>".
                     "<td>".$i."</td>".
                     "<td>".$arr_filas["cod_song"]."</td>".
                     "<td>".$arr_filas["art_name"]."</td>".
                     "<td>".$arr_filas["art_song"]."</td>".
                     "<td>".$arr_filas["art_dur"]."</td>".
                     "</tr>";
                $i++;
            }

            echo "</table>";
            $cn=null;
        }
    }
?>



