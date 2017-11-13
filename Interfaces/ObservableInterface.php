<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:41
 */

require_once("./Interfaces/ObserverInterface.php");
require_once("./Classes/Human.php");

interface ObservableInterface
{

    function attach(ObserverInterface $observer);

    function detach(ObserverInterface $observer);

    function notify(Human $person);

}