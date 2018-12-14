<?php
/**
 * Created by PhpStorm.
 * User: dangvanduc90
 * Date: 12/12/2018
 * Time: 23:21
 */
require_once ('Duck.php');
require_once ('NoFlyBehaviour.php');

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehaviour = new NoFlyBehaviour(true);
    }

    public function display()
    {
        echo "Em là vịt bầu";
    }
}