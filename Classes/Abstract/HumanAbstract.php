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
abstract class HumanAbstract implements ObservableInterface
{

    /**
     * Name of the person
     * @var null|string
     */
    protected $name = null;

    /**
     * Family of the person
     * @var null|Family
     */
    protected $family = null;

    /**
     * Observers array
     * @var array
     */
    protected $observers = [];

    /**
     * Get the user name
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Is there a family
     * @return bool
     */
    public function hasFamily(): bool
    {
        return isset($this->family);
    }

    /**
     * Get a family of the person
     * @return Family
     */
    public function getFamily(): Family
    {
        if ($this->hasFamily()) {
            return $this->family;
        }

        return null;
    }

    /**
     * Set a family to the person
     * @param Family $family
     */
    public function setFamily(Family &$family)
    {
        $this->family = $family;
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
    public function notify(Human $person, string $message = '')
    {
        foreach ($this->observers as $observer) {
            $observer->handle($person, $message);
        }
    }

}