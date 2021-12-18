<?php
class homeController extends mainController
{
    public function index()
    {
        $data = array(
            'texto' => "algo"
        );
        $this->loadTemplate("home", $data);
    }
    public function abrir()
    {
        echo "okeys";
    }
}
