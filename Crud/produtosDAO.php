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

    function chekConexao($connId){
        if($connId){
            echo "conectado";
        }else{
            echo "não foi possivel conectar";
        }
    }

    function save($valor,$quantidade,$nome){
        $db = conecta();

        $sql = "insert into produto (valor,quantidade,nome) values (?,?,?,?)";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$valor);
        $stmt->bindValue(2,$quantidade);
        $stmt->bindValue(3,$nome);
        $stmt->execute();
    }

    function update($valor,$quantidade,$nome,$id){
        $db = conecta();

        $sql = "update usuario set valor=?,quantidade=?,nome=? where idproduto = ?";

        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$valor);
        $stmt->bindValue(2,$quantidade);
        $stmt->bindValue(3,$nome);
        $stmt->bindValue(4,$id);
        $stmt->execute();
    }

    function delete($id){
        $db = conecta();

        $sql = "delete from usuario where idproduto = ?";
        $stmt = $db ->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
    }

    function getProdutos(){
        $db =conecta();
        $sql = "select * from produto";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $busca = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $busca;
    }

    function getProduto($nome){
        $db =conecta();
        $sql = "select * from produto where nome like '$nome%' ";
        $stmt = $db->prepare($sql);
        
        $stmt->execute();
        $busca = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return $busca;
    }


    function getProdutobyid($id){
        $db =conecta();
        $sql = "select * from produto where idproduto = ?";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }


?>