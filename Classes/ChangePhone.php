<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 3:09
 */

require_once("./Interfaces/ObservableInterface.php");
require_once("./Interfaces/ObserverInterface.php");

class ChangePhone implements ObserverInterface
{

    private $hr = null;

    public function __construct(Hr $hr)
    {
        $this->hr = $hr;
    }

    function handle(ObservableInterface $observable)
    {
        $this->hr->changeFamilyPhone($observable);
    }

}