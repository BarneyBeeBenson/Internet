<?php 
    function conecta(){
        $user="root";
        $senha="aluno";
        $database="crudphp";
        $host="localhost";
        
        $db = new PDO("mysql:host=$host;dbname=$database",$user,$senha);
        if($db){
            return $db;
        }else{
            return false;
        }
    }

?>