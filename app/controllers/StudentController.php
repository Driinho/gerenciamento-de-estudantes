<?php

    namespace app\controllers;

    use app\database\models\Student;

    class StudentController {

        private $student;

        public function __construct() {
            $this->student = new Student();
        }

        public function read() {
            return json_encode($this->student->all());
        }

        public function monitor() {
            return json_encode($this->student->grafico());
        }

        public function create($data) {
            return $this->student->novoAluno($data);
        }

        public function update($data) {
            return $this->student->atualizarAluno($data);
        }

        public function delete($data) {
            return $this->student->deletarAluno($data);
        }
    }