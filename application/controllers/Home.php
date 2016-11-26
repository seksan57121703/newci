<?php

/**
 * Created by PhpStorm.
 * User: lab
 * Date: 26/11/2559
 * Time: 13:35
 */
class Home extends CI_Controller
{
    public function index()
    {
        echo "hello";
    }

    public function test()
    {
        $name ="Seksan Tunjaritjariya";
        echo 'My name is'.$name;
    }

    public function x($name ="sek",$lastname="toon")
    {
        echo "My name is :" . $name ." ". $lastname;
    }
    public function calculator($int1 = 4,$int2 =4)
    {
        echo "Sum is :".($int1+$int2);
    }

}


