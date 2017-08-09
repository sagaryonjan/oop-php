<?php

require_once 'Database.php';

class Users extends Database
{


    private $table = 'users';

   public function login($request) {


       $email = $request['email'];
       $password = md5( $request['password'] );

       $sql = "SELECT * FROM ".$this->table." WHERE email = '$email' and password = '$password' and status ='1'";

       $users  = $this->queryExecute($sql);

       if( $users ) {

           if( isset ( $_SESSION['user_logged_in'] ) ) {

               header('location:dashboard.php');

           } else {

               Session::put('user_logged_in', $users);
               header('location:dashboard.php');

           }

       } else {

           return 'Incorrect username or password !';

       }

   }

   public function userAdd( $request ) {


       $username = $this->sanitizing($request['username']);
       $gender   = $this->sanitizing($request['gender']);
       $status   = $this->sanitizing($request['status']);
       $address  = $this->sanitizing($request['address']);
       $email    = $this->sanitizing($request['email']);
       $password = md5( $request['password'] );

       $sql = "INSERT INTO ".$this->table." ( username,gender,status,address,email,password ) 
       VALUES ('$username', '$gender', '$status', '$address', '$email', '$password') ";

       if( $this->execute($sql) ) {
           return 'User Added Successfully';
       } else {
           return 'Oop Something Went Wrong !';
       }


   }



}