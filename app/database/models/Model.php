<?php

    namespace app\database\models;

    use app\traits\Connection;
    use app\traits\Create;
    use app\traits\Read;
    use app\traits\Update;
    use app\traits\Delete;
    use app\traits\Monitor;
    
    abstract class Model {

        use Create, Read, Update, Delete, Connection, Monitor; 
    }