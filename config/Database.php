<?php

/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 7/3/2017
 * Time: 2:41 AM
 */
class Database
{
    protected $host     = 'localhost';
    protected $user     = 'root';
    protected $password = '';
    protected $database = 'oop-news-portal';
    private $conn;

    public function __construct()
    {
        if(!$this->conn) {

            try {
               $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

            } catch (Exception $e) {
                print_r($e);
                die;
            }

        }

        return $this->conn;
    }

    protected function queryExecute($sql) {

       $results = $this->conn->query($sql);

       if($results->num_rows == 1) {

           $data = mysqli_fetch_assoc($results);

           return $data;
       }

    }




    protected function sanitizing($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);



        return $data;
    }

}