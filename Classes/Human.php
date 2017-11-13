<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:43
 */

require_once("./Classes/Family.php");

class Human
{
    private $name = null;
    private $family = null;
    private $work = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hasFamily(): bool
    {
        return isset($this->family);
    }

    public function getFamily(): Family
    {
        if ($this->hasFamily()) {
            return $this->family;
        }
        
        return null;
    }

    public function setFamily(Family &$family)
    {
        $this->family = $family;
    }

    public function setWork(WorkInterface &$work)
    {
        $this->work = $work;
    }

    public function hasWork(): bool
    {
        return isset($this->work);
    }

    public function getWork(): WorkInterface
    {
        if ($this->hasWork()) {
            return $this->work;
        }

        return null;
    }

}