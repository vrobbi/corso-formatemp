<?php
spl_autoload_register(
  function ($nome){
    require_once str_Replace("\\","/",$nome).".php";
    
   }
);
?>