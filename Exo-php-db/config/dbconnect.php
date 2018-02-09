<?php
Class Db{
    private static $_connect;
    
    public static function connect()
    {
        
    if( !isset( self::$_connect ) )
    {
        self::$_connect = new mysqli( DB_HOST, DB_USER, DB_MDP, DB_SELECT);
    }
    return self::$_connect;
    }
}