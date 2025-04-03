<?php

class Request{

    private static $php_self="";
    private static $request_uri="";
    private static $script_filename="";
    private static $document_root="";


    public function __construct(){

        self::$php_self        = $_SERVER["PHP_SELF"];
        self::$request_uri     = $_SERVER["REQUEST_URI"];
        self::$script_filename = $_SERVER["SCRIPT_FILENAME"];
        self::$document_root   = $_SERVER["DOCUMENT_ROOT"];
    }

    public static function getUrl(){

        $path_origin = self::$script_filename;
        $path_main   = self::$document_root.self::$php_self;
        $request_url = str_replace($path_origin, '',$path_main);

        return empty($request_url)?'/':$request_url;
    }


    public static function getPublicUrl(){

        $path_origin = self::$script_filename;
        $request_uri = self::$request_uri;
        $path_main   = self::$document_root.self::$php_self;

        $request_url = str_replace($path_origin, '', $path_main);
        $public_path = str_replace($request_url, '', $request_uri);

        return $public_path;
    }
}