<?php

require 'Builder.php';
require 'helper/AppHelper.php';


class Users extends Builder
{

   protected $table = 'users';

   public function login($request) {

       $email    = $this->sanitizing($request['email']);
       $password = md5( $request['password'] );
       $users    = $this->fetch("SELECT * FROM ".$this->table." WHERE email = '$email' and password = '$password' and status ='1'");

       if( $users ) {

           if(! isset ( $_SESSION['user_logged_in'] ) ) {

               Session::put('user_logged_in', $users);
               header('location:dashboard.php');
               exit;

           }

       } else {

           return 'Incorrect username or password !';

       }

   }

   protected function fieldFilters($request)
   {
       $data = [];
       $data['username'] = $this->sanitizing($request['username']);
       $data['gender']   = $this->sanitizing($request['gender']);
       $data['status']   = $this->sanitizing($request['status']);
       $data['address']  = $this->sanitizing($request['address']);
       $data['email']    = $this->sanitizing($request['email']);
       $data['password'] = md5( $request['password'] );

       return $data;
   }


   public function insert( $request ) {

       extract($this->fieldFilters($request));

       $sql = "INSERT INTO ".$this->table." ( username,gender,status,address,email,password ) 
       VALUES ('$username', '$gender', '$status', '$address', '$email', '$password') ";

       if( $this->execute($sql) )
           AppHelper::flash('User Added Successfully', 'success');
       else
           AppHelper::flash('User is not added !!', 'danger');

       header('location:users.php');
       exit;
   }

   public function update( $request ) {

       extract($this->fieldFilters($request));
       $id = $request['id'];

        $sql = "UPDATE $this->table SET 
                      username='$username',
                      gender='$gender',
                      status='$status',
                      address='$address',
                      email='$email',
                      password='$password'
                WHERE id=$id";

        if( $this->execute($sql) ) {
            AppHelper::flash('User Updated Successfully', 'success');
        } else {
            AppHelper::flash('User is not updated !!', 'danger');
        }

       header('location:users.php');
        exit;
    }

   public function lists()
   {
      return $this->getSelectedData('username', 'email', 'gender', 'status', 'id');
   }

   public function edit($id)
   {
       return $this->fetch("SELECT * FROM $this->table WHERE id ='$id'");
   }

   public function destroy($request)
   {

       if(isset($request['_method']) && $request['_method'] == 'DELETE') {

           if(isset($request['id'])) {

               if(!$this->edit($request['id'])) {
                   header('location:404.php');
                   exit;
               }

               if( $this->delete($request['id']) )
                   AppHelper::flash('User deleted Successfully', 'success');
               else
                   AppHelper::flash('User is not deleted !!', 'danger');

               header('location:users.php');
               exit;
           }

       }

   }



}