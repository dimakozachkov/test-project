<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:39
 */

require_once("./Classes/Human.php");

interface ObserverInterface
{

    function handle(Human $person, $message = '');

}