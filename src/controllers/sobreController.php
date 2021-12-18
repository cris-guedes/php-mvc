<?php


class sobreController extends mainController
{
    public function index()
    {
        $data = array(
            'texto' => "algo"
        );
        $this->loadTemplate("sobre", $data);
    }
}
