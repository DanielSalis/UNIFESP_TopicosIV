<?php
            $cont = 0;
        try{
            $host='';
            $db = '';
            $username = '';
            $password = '';
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
