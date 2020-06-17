<?php

namespace App\Http\Controllers;


class AjaxController extends Controller
{


    public function index()
    {
        $func = $_POST['method'];
        return $this->$func(json_decode($_POST['oVals'], true));
    }

    public function ajaxCall($script)
    {
        echo "<script>" . $script . "</script>";
    }




}
