<?php

class Session
{	
	public static function init()
	{
		@session_start();
	}
	
	public static function set($key, $value)
	{
		$_SESSION[$key] = $value;
	}
	
	public static function get($key)
	{
		if (isset($_SESSION[$key]))
		return $_SESSION[$key];
	}
	
	public static function destroy()
	{
        if (!isset($_SESSION))
            @session_start();

        unset($_SESSION);
        @session_destroy();
        echo '
        <script type="text/javascript">
            window.location.href="'.'/aprendendo/login/telas/Formulario.html"
        </script>';
	}
        
    public static function valida($key)
	{
        if (!isset($_SESSION))
            @session_start();
        if (!isset($_SESSION[$key])){
            unset($_SESSION);
            @session_destroy();
            echo '
        <script type="text/javascript">
            window.location.href="'.'/aprendendo/login/telas/Formulario.html"
        </script>';
        }
	}
	
}