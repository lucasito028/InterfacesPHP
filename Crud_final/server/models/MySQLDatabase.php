<?php

namespace MySQLDatabase;


require_once 'Keys.php';
require_once 'BancoDeDados.php';


use Keys\Keys, BancoDeDados\BancoDeDados, PDO, PDOException;


abstract class MySQLDatabase extends Keys implements BancoDeDados{


    function connect(): PDO{
        try{
            $dns = "mysql:host={$this->host};
            port={$this->port};
            dbname={$this->db}";

            $this->conn = new PDO($dns, $this->user, $this->senha);

            return $this->conn;

        }catch(PDOException $e){

            die("Morri". $e->getMessage());

            return false;

        }
    }
    
    function select() :array{

        try{

            $this->conn = $this->connect();
    
            if ($this->conn) {
                $stmt = $this->conn->prepare(
                    ""
                );
    
                if ($stmt->execute()) {
                    // Recupera todos os registros como um array associativo
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
                    return $result;
                } else {
                    return [];
                }
            } else {
                return "No Ler";
            }
        } catch (PDOException $err) {
            return "Erro: " . $err->getMessage();
        }
    }

    function create($dadosclientesarray){

        try{
            
        $this -> conn = $this -> connect();

            if($this -> conn){
                
                $stmt = $this -> conn -> prepare(
                ""
                );

                $result = $stmt->execute(
                []);

                if($result){

                    return "success";

                }else{

                    return "fail";

                }


            }else{
                return "paunahoradeconectar";
            }


        }

        catch(PDOException $err){

            return "Erro". $err->getMessage();

        }

    }

    function update($dadosclientesarray){

        try{
            
        $this -> conn = $this -> connect();

            if($this -> conn){
                
                $stmt = $this -> conn -> prepare(
                ""
                );

                $result = $stmt->execute(
                []);

                if($result){
                    
                    return "success";

                }else{

                    return "fail";

                }


            }else{
                return "paunahoradeconectar";
            }


        }

        catch(PDOException $err){

            return "Erro". $err->getMessage();

        }

    }

    function delete($dadosclientesarray){

        try{
            
        $this -> conn = $this -> connect();

            if($this -> conn){
                
                $stmt = $this -> conn -> prepare(
                ""
                );

                $result = $stmt->execute(
                []);

                if($result){
                    
                    return "success";

                }else{

                    return "fail";

                }


            }else{
                return "paunahoradeconectar";
            }


        }

        catch(PDOException $err){

            return "Erro". $err->getMessage();

        }

    }

}
