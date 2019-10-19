<?php
    /**
     * @{}
     */
    // class Conexao
    abstract class Conexao {
        const USER = "root"; // user
        const PASS = "";    // pass

        private static $instance = null;

        private static function conectar() {

            try {
                if (self::$instance == null):
                    $dsn = "mysql:host=localhost;dbname=lpoo2"; // host + database
                    self::$instance = new PDO($dsn, self::USER, self::PASS);
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                endif;
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
            return self::$instance;
        }
        protected static function getDB() {
            return self::conectar();
        }
    }