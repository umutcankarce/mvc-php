<?php 
namespace app\Core;
class Controller {


        public function viewError(string $viewName,$data=[]):void
        {
          $filePath = __DIR__  .'/../../resources/views/'.$viewName.'.php';
    
          if(file_exists($filePath)){
            extract($data);
            include_once $filePath;
          }else { 
            require_once __DIR__  .'/../../resources/views/errors/404.php';
          }
    
        }

}