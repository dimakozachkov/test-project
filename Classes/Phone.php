<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 3:09
 */

/**
 * Class Phone
 */
class Phone
{
    /**
     * Number of the phone
     * @var string
     */
    private $number;

    /**
     * Phone constructor.
     */
    public function __construct()
    {
        $this->number = '+00000';
    }

    /**
     * Get the phone number
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set number to the phone
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->number = "+$number";
    }
}