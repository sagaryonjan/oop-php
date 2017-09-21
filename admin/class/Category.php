<?php

require_once 'Builder.php';
require_once 'helper/AppHelper.php';


class Category extends Builder
{
   protected $table    = 'category';
   protected $redirect = 'category';
   protected $title = 'Category';

   public function insert( $request ) {

       $data = $this->create([
           'title'       =>  $this->sanitizing($request['title']),
           'slug'        =>  AppHelper::slugify($request['title']),
           'status'      =>  $this->sanitizing($request['status']),
           'description' =>  $this->sanitizing($request['description']),
       ]);

       if( $data )
           AppHelper::flash($this->title.' Added Successfully', 'success');
       else
           AppHelper::flash($this->title. ' is not added !!', 'danger');

       header('location:'.$this->redirect.'.php');
   }

   public function updateCategory( $request ) {

       $id = $request['id'];

       $data = $this->where('id', '=', $id )
           ->update([
               'title'       =>  $this->sanitizing($request['title']),
               'slug'        =>  AppHelper::slugify($request['title']),
               'status'      =>  $this->sanitizing($request['status']),
               'description' =>  $this->sanitizing($request['description']),
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
       return $this->select('title', 'slug', 'status', 'id')->get();
   }

   public function edit($id)
   {
       return $this->select('title', 'slug', 'status', 'id')->where('id', '=', $id)->first();
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

   public function categoryList()
   {
      return $this->select('title', 'id')->get();
   }

}