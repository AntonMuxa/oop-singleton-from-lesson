<?php

namespace controllers;

class HomeController
{
    public function __construct()
    {

    }

    protected function loadModel($model, $alias)
    {
       $class = "\models\\" . $model;
       $this->{$alias} = new $class();
    }

    protected function display($view, $data = null){
		if(!empty($data)){
            extract($data);
        }
        ob_start();
        include sprintf($_SERVER["DOCUMENT_ROOT"] . "/views/" . $view . ".php");
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }

    /*protected function data($alias, $value){
        $this->{$alias} = $value;
    }*/
}