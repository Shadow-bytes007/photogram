<?php
class Session{
    public static function start()   //all these  function is offered by php inbuilt
    {
        session_start();
    }
    public static function status()  
    {
        session_status();
        printf("status \n".session_status());
    }
    public static function unset()
    {
        session_unset();
        printf("clearing...\n");
    }
    public static function destroy()
    {
        printf("destroying....\n");
        session_destroy();
    }

    public static function set($key,$value)
    {
        $_SESSION[$key] = $value;
    }

    public static function delete($key)
    {
        print("deleting....");
        delete($_SESSION[$key]);
    }

    public static function isset($key)
    {
        return isset($_SESSION[$key]);
    }

    public static function get($key , $default = false)
    {
        if (Session::isset($key)){
        return $_SESSION[$key];
        }
        else{
            return $default;
        }
    }
}
