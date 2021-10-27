<?php
class homeController extends mainController{
    public function index(){
        $data = array(
            'texto' => "algo"
        );
        $this->loadView("home",$data);
    }
    public function abrir(){
        echo "okeys";
    }
}