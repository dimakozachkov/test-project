<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:43
 */

require_once("./Classes/Family.php");

/**
 * Class Human
 */
class Human
{
    /**
     * Name of the person
     * @var null|string
     */
    private $name = null;

    /**
     * Family of the person
     * @var null|Family
     */
    private $family = null;

    /**
     * Work of the person
     * @var null|Work
     */
    private $work = null;

    /**
     * Human constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

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

}