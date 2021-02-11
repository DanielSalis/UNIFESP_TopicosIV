<?php
            $cont = 0;
        try{
            $host='ec2-3-232-92-90.compute-1.amazonaws.com';
            $db = 'd33li3igdfpsvl';
            $username = 'cydhhehlenfkgc';
            $password = 'e0b4bf91c2aa5d3ea3dd2d237a617cdd9ea3dc24a4d6c8d35774888c46d8ffac';
            $Con = new PDO("pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password");

                $dom = new DOMDocument('1.0', 'iso-8859-1');

                $name = $_POST['first_name'];
    
                $telefone = $_POST['telefone'];
    
                $endereco = $_POST['endereco'];
    
                $whatsapp = $_POST['whatsapp'];
    
                $data = [
                    'nome' => $name,
                    'endereco' => $endereco,
                    'telefone' => $telefone,
                    'whatsapp' => $whatsapp
                ];
                $sql = "INSERT INTO restaurante (nome, endereco, telefone, whatsapp) VALUES (:nome, :endereco, :telefone, :whatsapp)";
                $stmt= $Con->prepare($sql);
                $stmt->execute($data);

                if($stmt){
                        echo "Cadastro Realizado com sucesso! Se queiser efetuar mais um volte para a página anterior";
    
                }
                
        } catch (PDOException $Erro){
            echo "<h3> Erro </h3>";
            return $Erro->getMessage();
        }

        $cont = $cont + 1;
?>