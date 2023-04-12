<?php

    namespace app\traits;

    trait Update {

        public function atualizarAluno($dados) {
        
            try {
    
                $id = $dados["id"];
                $nome = $dados["nome"];
                $turma = $dados["turma"];
    
                $sql = sprintf("UPDATE %s SET nome = '%s', turma = '%s' WHERE id = '%s';", $this->table, $nome, $turma, $id);

                $prepared = $this->connection->prepare($sql);

                return $prepared->execute();

            } catch (PDOException $e) {
                return var_dump($e->getMessage());
            }
        }
    }