<?php

require 'Database.php';
/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 7/3/2017
 * Time: 2:41 AM
 */
class Builder extends Database
{

    /**
     * Here will be all the selected fields, like username,email,password
     *
     * @var string $select_fields
     */
    private $select_fields;

    /**
     * @var
     */
    private $where;


    private $limit;


    /**
     * @param array ...$params
     * @return $this
     */
    protected function select(...$params)
    {
        $this->select_fields = implode(',' , $params);

       return $this;
    }

    /**
     * function get
     * return array
     */
    protected function get() {

        $sql = 'SELECT ';
        if($this->select_fields) {
            $sql .= $this->select_fields;
        } else {
            $sql .= '*';
        }

        $sql.=" FROM $this->table ";

        if($this->limit) {
            $sql.= $this->limit;
        }

        if($this->where) {
            $sql.= $this->where;
        }

      return  $this->fetchAll($sql);

    }

    /**
     * Where for condition
     * @param $field
     * @param $column
     * @param $id
     * @return $this
     */
    public function where($field, $column, $id)
    {
        $this->limit = "WHERE  $field $column '$id' ";

        return $this;
    }


    public function limit(int $value)
    {
        $this->where = " LIMIT {$value} ";

        return $this;
    }

    public function toQuery()
    {
        $sql = 'SELECT ';
        if($this->select_fields) {
            $sql .= $this->select_fields;
        } else {
            $sql .= '*';
        }

        $sql.=" FROM $this->table ";

        if($this->limit) {
            $sql.= $this->limit;
        }

        if($this->where) {
            $sql.= $this->where;
        }

        return $sql;
    }

    /**
     * @return array
     */
    public function first()
    {
        $sql = 'SELECT ';
        if($this->select_fields) {
            $sql .= $this->select_fields;
        } else {
            $sql .= '*';
        }

        $sql.=" FROM $this->table ";

        if($this->limit) {
            $sql.= $this->limit;
        }

        if($this->where) {
            $sql.= $this->where;
        }

        return $this->fetch($sql);
    }



    /**
     * @param $detail
     * @return bool
     */
    public function create(array $detail) : bool
    {

        $sql = "INSERT INTO $this->table ( ";

        $field =  implode(',', array_keys($detail));

        $sql .= $field." )  VALUES ( '";


        $value = implode("', '", array_values($detail));
        $sql .= $value."' ) ";


        if($this->execute($sql)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param array $details
     * @return bool
     */
    public function update(array $details)
    {

        $sql = "UPDATE $this->table SET ";

        $len = count($details);

        $i = 0;
        foreach ( $details as $key =>  $value) {

                $total = $len - 1;
             if ($i == $total) {
                 $sql .=  $key."='".$value."'  ";
                } else {
                 $sql .=  $key."='".$value."',  ";
             }


            $i++;

        }

        if($this->where) {
            $sql.= $this->where;
        }

        if($this->execute($sql)) {
            return true;
        } else {
            return false;
        }


    }





}