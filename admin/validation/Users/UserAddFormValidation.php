<?php

//class UserAddFormValidation extends Database {

   /* protected $table = 'users';

    protected $errors = [];

    protected $fields = [];

    protected $validate = 1;

    protected $current_field;

    public function __construct()
    {
        parent::__construct();

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->fields = $_POST;
        }
    }

    protected function required($field) {

        $this->current_field = $field;

        if( $this->fields[$field] == '' ) {

            $this->errors[$field] = 'Please Fill You '.$field;

            $this->validate = 0;

            return $this;
        }

        return $this;


    }

    protected function unique(){

        $value = $this->fields[$this->current_field];

        if( $value ) {

            $query = "SELECT * FROM ".$this->table." WHERE $this->current_field = '$value'";

            if( $this->execute($query) ){

                $this->errors[$this->current_field] = 'THis field must be unique';

                $this->validate = 0;

                return $this;

            } else {

                return $this;

            }
        }
        return $this;
    }*/


   /* public function rules($data) {

        $this->required('email')->unique();
        $this->required('username')->unique();
        $this->required('password');
        $this->required('gender');
        $this->required('status');
        $this->required('address');

        $end = [];

        if($this->validate == 0) {

            $end['validate'] = 0;
            $end['errors'] = $this->errors;

        } else {

            $end['validate'] = $this->validate;
        }

        return $end;

    }*/




//}


class UserAddFormValidation extends Database {

    protected $table = 'users';

    public function rules($data) {

        $errors = [];

        $validate = 1;

        if($this->checkUniqueField('email', $data['email'])) {

            $errors['email'] = 'This email is already used !';
            $validate = 0;
        }

        if($this->checkUniqueField('username', $data['username'])) {

            $errors['username'] = 'This username is already used !';
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

        if($this->execute($sql)->num_rows == 1){
            return true;
        } else {
            return false;
        }
    }


}