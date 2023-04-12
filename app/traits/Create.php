<?php

    namespace app\traits;

    trait Create {

        public function novoAluno($dados) {

            try {

                $nome = $dados["nome"];
                $turma = $dados["turma"];

                $sql = sprintf("INSERT INTO %s(nome, turma) VALUES('%s', '%s');", $this->table, $nome, $turma);

                $prepared = $this->connection->prepare($sql);

                return $prepared->execute();

            } catch(PDOException $e) {
                return var_dump($e->getMessage());
            }
        }
    }