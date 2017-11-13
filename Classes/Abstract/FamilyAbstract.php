<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 19:51
 */

require_once('./Interfaces/ObservableInterface.php');
require_once("./Classes/Human.php");

abstract class FamilyAbstract implements ObservableInterface
{

    private $observers = [];

    public function attach(ObserverInterface $observer) {
        array_push($this->observers, $observer);
    }

    public function detach(ObserverInterface $observer) {
        foreach($this->observers as $key => $val) {
            if ($key == $observer) {
                unset($this->observers[$val]);
            }
        }
    }

    public function notify(Human $person) {
        foreach($this->observers as $observer) {
            $observer->handle($person);
        }
    }

}