<?php

class bkp extends Database {

    protected $table = 'users';




    public function rules($data) {

        $errors = [];

        $validate = 1;

        if($this->checkUniqueField('email', $data['email'])) {

            $errors['email'] = 'This email is already used !';
            $validate = 0;
        }

        if($this->checkUniqueField('username', $data['username'])) {

            $errors['username'] = 'This email is already used !';
            $validate = 0;

        }

        if($data['email'] == '') {

            $errors['email'] = 'Please Fill You email';
            $validate = 0;

        }
        else {

            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Invalid email format";
                $validate = 0;
            }
        }

        if($data['password'] == '') {
            $errors['password'] = 'Please Fill You password';
            $validate = 0;
        }

        if($data['username'] == '') {
            $errors['username'] = 'Please Fill You username';
            $validate = 0;
        }
        if($data['gender'] == '') {
            $errors['gender'] = 'Please Fill You gender';
            $validate = 0;
        }

        if($data['status'] == '') {
            $errors['status'] = 'Please Fill You status';
            $validate = 0;
        }

        if($data['address'] == '') {
            $errors['address'] = 'Please Fill You Address';
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

    protected function checkUniqueField($field, $value) {

        $sql = "SELECT * FROM ".$this->table." WHERE $field = '$value'";

        if($this->execute($sql)){
            return true;
        } else {
            return false;
        }
    }


}