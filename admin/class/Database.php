<?php


class Database
{
    /**
     * @var string
     */
    private $host     = 'localhost';
    /**
     * @var string
     */
    private $user     = 'root';
    private $password = '';
    private $database = 'oop-news-portal';
    protected $conn;

    public function __construct()
    {

        try {
           $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        } catch (Exception $e) {
            print_r($e);
            die;
        }

        return $this->conn;
    }

    protected function fetch($sql) {

        $results = $this->execute($sql);

       if($results->num_rows == 1) {

           $data = $results->fetch_assoc();

           return $data;
       }

    }

    protected function execute($sql) {

      $results = $this->conn->query($sql);

       return $results;
    }

    protected function fetchAll($sql) {



        $results = $this->execute($sql);
        $rows = [];

        if($results->num_rows > 0) {

            while ( $data = $results->fetch_assoc() ) {

                array_push($rows, $data);

            }


        }


        return $rows;

    }


    protected function sanitizing($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    public function delete($id)
    {
        return $this->execute("DELETE FROM $this->table WHERE id='$id'");

    }

}