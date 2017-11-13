<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 3:09
 */

class Phone
{
    /**
     * Number of phone
     * @var string
     */
    private $number;
    public function __construct()
    {
        $this->number = '+00000';
    }
    public function getNumber(): string {
        return $this->number;
    }
    public function setNumber(string $number) {
        $this->number = "+$number";
    }
}