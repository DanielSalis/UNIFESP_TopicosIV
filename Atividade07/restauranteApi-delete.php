<?php
        try{
            $host='';
            $db = '';
            $username = '';
            $password = '';
            $Con = new PDO("pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password");

                $dom = new DOMDocument('1.0', 'iso-8859-1');

                $name = $_POST['first_name'];
    
                $data = [
                    'nome' => $name
                ];
                $sql = "DELETE from restaurante where restaurante.nome = :nome ";
                $stmt= $Con->prepare($sql);
                $stmt->execute($data);

                if($stmt){
                        echo "DELETE Realizado com sucesso! Se queiser efetuar mais um volte para a página anterior";
    
                }
                
        } catch (PDOException $Erro){
            echo "<h3> Erro </h3>";
            return $Erro->getMessage();
        }

        $cont = $cont + 1;
?>
