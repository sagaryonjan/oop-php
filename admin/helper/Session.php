<?php
session_start();

class Session {

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

    public function logout() {

        if($_SESSION['user_logged_in']) {
            session_unset();
            session_destroy();
        }

        return true;
    }



}