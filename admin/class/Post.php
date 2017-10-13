<?php

require_once 'BaseClass.php';

class Post extends BaseClass
{
   protected $table    = 'post';
   protected $redirect = 'post';
   protected $title = 'Post';

   public function insert( ) {

       $data = $this->create([
           'title'       =>  $this->sanitizing($_POST['title']),
           'slug'        =>  $this->slugify($_POST['title']),
           'category_id' =>  $_POST['category_id'],
           'image'       =>  $this->uploadImage(),
           'status'      =>  $this->sanitizing($_POST['status']),
           'short_desc'  =>  $this->sanitizing($_POST['short_desc']),
           'long_desc'   =>  $this->sanitizing($_POST['long_desc']),
       ]);


       if( $data )
           $this->flash($this->title.' Added Successfully', 'success');
       else
           $this->flash($this->title. ' is not added !!', 'danger');

       header('location:'.$this->redirect.'.php');
   }

   public function updatePost( $request ) {

       $id = $request['id'];

      $data =  $this->where('id', '=', $id)->first();


       $data = $this->where('id', '=', $id )
           ->update([
               'title'       =>  $this->sanitizing($_POST['title']),
               'slug'        =>  $this->slugify($_POST['title']),
               'category_id' =>  $_POST['category_id'],
               'image'       =>  $this->uploadImage($data['image']),
               'status'      =>  $this->sanitizing($_POST['status']),
               'short_desc'  =>  $this->sanitizing($_POST['short_desc']),
               'long_desc'   =>  $this->sanitizing($_POST['long_desc']),
           ]);

        if( $data ) {
            $this->flash($this->title.' Updated Successfully', 'success');
        } else {
            $this->flash($this->title.' is not updated !!', 'danger');
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
               $data = $this->edit($request['id']);

               if(!$this->edit($request['id'])) {
                   header('location:404.php');
                   exit;
               }
               $public_path = '../public/images/post/';

               if( $this->delete($request['id']) ) {
                   if(isset($data['image'])) {
                       unlink($public_path.$data['image']);
                   }
                   $this->flash($this->title.' deleted Successfully', 'success');
               }
               else
                   $this->flash($this->title.' is not deleted !!', 'warning');

               header('location:'.$this->redirect.'.php');
               exit;
           }

       }

   }

    /**
     * @param $category_id
     * @return array
     */
   public function getPostAsCategory($category_id)
   {
      $category =  $this->select('title',
          'slug',
          'id',
          'image',
          'status',
          'category_id', 'short_desc', 'long_desc', 'created_at')
          ->where('category_id','=', $category_id)->limit(2)->get();

      return $category;
   }


}