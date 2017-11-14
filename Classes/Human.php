<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:43
 */

require_once("./Classes/Family.php");
require_once("./Classes/Phone.php");
require_once("./Classes/HumanObserver.php");

require_once("./Classes/Abstract/HumanAbstract.php");

/**
 * Class Human
 */
class Human extends HumanAbstract
{

    const CHANGE_PHONE_EVENT = 'OnChangePhoneEvent';

    /**
     * Work of the person
     * @var null|Work
     */
    private $work = null;

    private $phone = null;

    /**
     * Human constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->phone = new Phone();
        $this->observers[] = new HumanObserver();
    }

    /**
     * Set a work to the person
     * @param WorkInterface $work
     */
    public function setWork(WorkInterface &$work)
    {
        $this->work = $work;
    }

    /**
     * Is there a work
     * @return bool
     */
    public function hasWork(): bool
    {
        return isset($this->work);
    }

    /**
     * Get a work of the person
     * @return Family
     */
    public function getWork(): WorkInterface
    {
        if ($this->hasWork()) {
            return $this->work;
        }

        return null;
    }

    public function getPhone(): string
    {
        return $this->phone->getNumber();
    }

    public function changePhone(string $number): void
    {
        $this->phone->setNumber($number);
        $this->notify($this, self::CHANGE_PHONE_EVENT);
    }


}