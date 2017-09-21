<?php

require_once 'Builder.php';
require_once 'helper/AppHelper.php';


class Post extends Builder
{
   protected $table    = 'post';
   protected $redirect = 'post';
   protected $title = 'Post';


   public function insert( ) {

       $data = $this->create([
           'title'       =>  $this->sanitizing($_POST['title']),
           'slug'        =>  AppHelper::slugify($_POST['title']),
           'category_id' =>  $_POST['category_id'],
           'image'       =>  AppHelper::uploadImage(),
           'status'      =>  $this->sanitizing($_POST['status']),
           'short_desc'  =>  $this->sanitizing($_POST['short_desc']),
           'long_desc'   =>  $this->sanitizing($_POST['long_desc']),
       ]);


       if( $data )
           AppHelper::flash($this->title.' Added Successfully', 'success');
       else
           AppHelper::flash($this->title. ' is not added !!', 'danger');

       header('location:'.$this->redirect.'.php');
   }


   public function updatePost( $request ) {

       $id = $request['id'];

      $data =  $this->where('id', '=', $id)->first();


       $data = $this->where('id', '=', $id )
           ->update([
               'title'       =>  $this->sanitizing($_POST['title']),
               'slug'        =>  AppHelper::slugify($_POST['title']),
               'category_id' =>  $_POST['category_id'],
               'image'       =>  AppHelper::uploadImage($data['image']),
               'status'      =>  $this->sanitizing($_POST['status']),
               'short_desc'  =>  $this->sanitizing($_POST['short_desc']),
               'long_desc'   =>  $this->sanitizing($_POST['long_desc']),
           ]);

        if( $data ) {
            AppHelper::flash($this->title.' Updated Successfully', 'success');
        } else {
            AppHelper::flash($this->title.' is not updated !!', 'danger');
        }

       header('location:'.$this->redirect.'.php');
        exit;
    }

   public function lists()
   {
       return $this->select('title', 'slug',  'id', 'image', 'status')->get();
   }

   public function edit($id)
   {
       return $this->select('*')->where('id', '=', $id)->first();
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
                   AppHelper::flash($this->title.' deleted Successfully', 'success');
               else
                   AppHelper::flash($this->title.' is not deleted !!', 'danger');

               header('location:'.$this->redirect.'.php');
               exit;
           }

       }

   }



}