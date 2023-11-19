<?php

class HomeController {
    public function index() {
        $database = new Database();
        $conn = $database->connect();

        // Lógica de negócios (se necessário)

        include_once('app/View/home.php');
    }
}
