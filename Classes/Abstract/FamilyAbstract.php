<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 19:51
 */

require_once('./Interfaces/ObservableInterface.php');
require_once("./Classes/Human.php");

/**
 * Class FamilyAbstract
 */
abstract class FamilyAbstract implements ObservableInterface
{

    /**
     * Observers array
     * @var array
     */
    protected $observers = [];

    /**
     * Family members
     * @var array
     */
    protected $familyMembers = [];

    /**
     * Return a husband of a family
     * @return Human
     */
    public function getHusband(): Human
    {
        return $this->familyMembers['husband'];
    }

    /**
     * Return a wife of a family
     * @return Human
     */
    public function getWife(): Human
    {
        return $this->familyMembers['wife'];
    }

    /**
     * Is this person the husband?
     * @param Human $person
     * @return bool
     */
    public function personIsHusband(Human $person): bool
    {
        return $this->familyMembers['husband'] == $person;
    }

    /**
     * Is this person the wife?
     * @param Human $person
     * @return bool
     */
    public function personIsWife(Human $person): bool
    {
        return $this->familyMembers['wife'] == $person;
    }

    /**
     * Attach a observer
     * @param ObserverInterface $observer
     */
    public function attach(ObserverInterface $observer)
    {
        array_push($this->observers, $observer);
    }

    /**
     * Detach a observer
     * @param ObserverInterface $observer
     */
    public function detach(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $val) {
            if ($key == $observer) {
                unset($this->observers[$val]);
            }
        }
    }

    /**
     * Notify observers
     * @param Human $person
     */
    public function notify(Human $person)
    {
        foreach ($this->observers as $observer) {
            $observer->handle($person);
        }
    }

}