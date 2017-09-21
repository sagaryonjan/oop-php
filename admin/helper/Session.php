<?php
session_start();

class Session {

    public function __construct()
    {

        if( ! static::checkUserAunthenticate() ) {

            header('location:index.php');

        }

    }


    public static function checkUserAunthenticate()
    {
        if(isset( $_SESSION['user_logged_in']) ) {
           return true;
        }

        return false;
    }

    public static function put( $key, $value ) {

        $_SESSION[$key] = $value;

    }

    public static function auth() {

        if( isset( $_SESSION['user_logged_in']) ) {
            return $_SESSION['user_logged_in'];
        }

    }

    public static function get($key){
        if(isset( $_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }


    public function logout() {

        if($_SESSION['user_logged_in']) {
            session_unset();
            session_destroy();
        }

        return true;
    }

    public static function remove($key)
    {
        if(isset( $_SESSION[$key])) {
            unset($_SESSION[$key]);
            return true;
        }
        return false;
    }



}