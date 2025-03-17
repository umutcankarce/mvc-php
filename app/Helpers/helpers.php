<?php 


if(!function_exists('dd'))
{
    function dd(mixed $data)
    { 
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }
}

if(!function_exists('viewError')){
    function viewError(string $viewName, $data = []): void
    {
        $filePath =  $_SERVER["DOCUMENT_ROOT"]."/".VIEWS_PATH."errors/". $viewName.'.php';
    
        if (file_exists($filePath)) {
            extract($data);
            include_once  $_SERVER["DOCUMENT_ROOT"]."/".VIEWS_PATH."errors/". $viewName.'.php';
        } else {
            require_once  $_SERVER["DOCUMENT_ROOT"]."/".VIEWS_PATH."errors/". $viewName.'.php';
        }
    }
}


if(!function_exists('view')){
    function view(string $viewName,$data=[]):void
    {
      $filePath = $_SERVER["DOCUMENT_ROOT"]."/".VIEWS_PATH. $viewName.'.php';
      

      if(file_exists($filePath)){
        extract($data);
        include_once $filePath;
      }else { 
        viewError("404");
      }

    }
}


if(!function_exists('__lang')){
    function __lang($fileName,$key,$lang=DEFAULT_LANG){
        $filePath = $_SERVER["DOCUMENT_ROOT"]."/".LANG_PATH.$lang."/". $fileName.'.json';
        //echo "File Path: $filePath<br>";
        if(file_exists($filePath)){
            $translations = json_decode(file_get_contents($filePath), true);        
            return $translations[$key] ?? $key ;
        }else { 
            return $key ;
        }

    
    }
}