<?php
    function connecteMyDb() {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=jaridaDb', 'root', '');
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
          } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
          }
    }