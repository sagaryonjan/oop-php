<?php

include '../config/Database.php';

class Users extends Database
{

   public function login($request) {

       $email = $request['email'];
       $password = md5($request['password']);

       $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password' and status ='1'  ";

       $users  = $this->queryExecute($sql);

       return $users;
   }

    public function loginValidation($data) {

        $errors = [];

        $validate = 1;

        if($data['email'] == '') {
            $errors['email'] = 'Please Fill You email';
            $validate = 0;
        } else {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Invalid email format";
                $validate = 0;
            }
        }

        if($data['password'] == '') {
            $errors['password'] = 'Please Fill You password';
            $validate = 0;
        }

        $end = [];

        if($validate == 0) {

            $end['validate'] = 0;
            $end['errors'] = $errors;

        } else {

            $end['validate'] = $validate;
        }

        return $end;

    }

}