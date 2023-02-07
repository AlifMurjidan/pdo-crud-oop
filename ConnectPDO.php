<?php

class ConnectPDO {
    /**
     * Properties adalah variable di dalam class
     */

    protected   $host       = 'localhost',
                $dbname     = 'public_complaint_reports',
                $username   = 'root',
                $password;
    
    /**
     * Method yang pertama kali dijalankan saat aplikasi berjalan
     */
    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->dbname";

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password);

            // if ($this->pdo) {
            //     echo "Berhasil terhubung ke Database $this->dbname";
            // }
        } catch (PDOException $e) {
            echo "Terjadi Kesalahan : " . $e->getMessage(); 
        }
    }
}

$db = new ConnectPDO();

/**
 * OOP
 * 
 * Class, Object
 * Construct
 * Inheritance
 * Polymorism
 * Encapsulation
 * Error /  Exception : try .. catch ..
 */