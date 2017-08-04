<?php

/**
 * Created by PhpStorm.
 * User: Sagar
 * Date: 8/4/2017
 * Time: 1:19 AM
 */
class LoginValidation
{

    public function rules($data) {

        $errors = [];

        $validate = 1;

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