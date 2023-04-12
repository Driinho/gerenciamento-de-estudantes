<?php

    namespace app\traits;

    trait Monitor {

        public function grafico() {

            try {

                $query = $this->connection->query(
                    "SELECT s.turma, COUNT(s.turma) as 'total' FROM {$this->table} s GROUP BY s.turma"
                );
                return $query->fetchAll();

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }