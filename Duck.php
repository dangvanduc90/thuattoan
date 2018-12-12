<?php
/**
 * Created by PhpStorm.
 * User: dangvanduc90
 * Date: 12/12/2018
 * Time: 23:18
 */

abstract class Duck
{
    public $flyBehaviour;
    public function setFlyBehaviour($flyBehaviour) {
        $this->flyBehaviour = $flyBehaviour;
    }
    public function swim() {
        echo "Vịt bắt đầu bơi";
    }
    public function quack() {
        echo "Vịt bắt đầu kêu";
    }

    public abstract function display();
}