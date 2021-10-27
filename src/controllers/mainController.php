<?php
class mainController{
    public function loadView($viewName,$viewData){
        extract($viewData);
        require "views/".$viewName.".php";
    }   
    
    
}