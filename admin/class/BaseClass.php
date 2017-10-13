<?php
require_once 'Builder.php';

class BaseClass extends Builder
{

    public  function flash($message, $type)
    {

        $alert_message ="<div class=\"alert alert-block alert-$type\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                <i class=\"ace-icon fa fa-times\"></i>
                            </button>

                            <i class=\"ace-icon fa fa-check green\"></i>
                          $message
                        </div>";

        Session::put('message', $alert_message);

    }

    /**
     * @param $text
     * @return mixed|string
     */
    public static function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public static function uploadImage($old_image = null)
    {
        if(isset($_FILES['image']) && $_FILES['image']['name'] != '') {

            $public_path = '../public/images/post/';

            $tmp = $_FILES['image']['tmp_name'];

            $image_name =  rand(3647,8768).'_'.$_FILES['image']['name'];

            move_uploaded_file($tmp, $public_path.$image_name);

            if($old_image !== null) {
                unlink($public_path.$old_image);
            }


            return $image_name;
        } else {
            if($old_image !== null) {
                return $old_image;
            }

        }

        return true;

    }

}