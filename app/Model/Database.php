<?php

class Database {
    private $host = 'mysql';
    private $user = 'exampleuser';
    private $password = 'examplepass';
    private $database = 'exampledb';

    public function connect() {
        return new mysqli($this->host, $this->user, $this->password, $this->database);
    }
}
