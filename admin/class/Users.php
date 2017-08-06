<?php

include 'Database.php';

class Users extends Database
{

   public function login($request) {

       $email = $request['email'];
       $password = md5( $request['password'] );

       $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password' and status ='1'";

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



}