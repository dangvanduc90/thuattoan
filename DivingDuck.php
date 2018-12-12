<?php
/**
 * Created by PhpStorm.
 * User: dangvanduc90
 * Date: 12/12/2018
 * Time: 23:19
 */

require_once ('Duck.php');
require_once ('CanFlyBehaviour.php');

class DivingDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehaviour = new CanFlyBehaviour();
    }

    public function display()
    {
        echo "Em là vịt trời";
    }
}