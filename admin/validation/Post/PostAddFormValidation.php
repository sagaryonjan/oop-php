<?php


class PostAddFormValidation extends Database {

    protected $table = 'post';

    public function rules($data) {

        $errors = [];

        $validate = 1;

        if($this->checkUniqueField('title', $data['title'])) {

            $errors['title'] = 'This title is already used !';
            $validate = 0;
        }

        if($data['category_id'] == '') {
            $errors['category_id'] = 'Please Fill You category field';
            $validate = 0;
        }

        if($data['short_desc'] == '') {
            $errors['short_desc'] = 'Please Fill You Short Description field';
            $validate = 0;
        }


        if($data['status'] == '') {
            $errors['status'] = 'Please Fill You status';
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