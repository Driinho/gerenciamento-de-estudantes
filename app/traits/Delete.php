<?php

    namespace app\traits;

    trait Delete {

        public function deletarAluno($dados) {
            
            try {

                $id = $dados["id"];

                $sql = sprintf("DELETE FROM %s WHERE id = %s", $this->table, $id);

                $prepared = $this->connection->prepare($sql);

                return $prepared->execute();

            } catch(PDOException $e) {
                return var_dump($e->getMessage());
            }
        }
    }