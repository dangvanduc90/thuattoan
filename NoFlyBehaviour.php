<?php
/**
 * Created by PhpStorm.
 * User: dangvanduc90
 * Date: 12/12/2018
 * Time: 23:30
 */

class NoFlyBehaviour
{
    public $is_check;

    public function __construct($is_check)
    {
        $this->is_check = $is_check;
    }

    public function fly()
    {
        echo "Em bó tay";
    }
}