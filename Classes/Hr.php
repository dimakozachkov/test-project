<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:50
 */

require_once("./Classes/Human.php");
require_once("./Interfaces/WorkInterface.php");

/**
 * Class Hr
 */
class Hr implements WorkInterface
{

    /**
     * Worker
     * @var Human|null
     */
    private $worker = null;

    /**
     * Hr constructor.
     * @param Human $worker
     */
    public function __construct(Human &$worker)
    {
        $this->worker = $worker;
        $worker->setWork($this);
    }

    /**
     * Set a worker to Hr
     * @param Human $worker
     */
    public function setWorker(Human $worker)
    {
        $this->worker = $worker;
    }

    /**
     * Is there an employee
     * @return bool
     */
    public function hasWorker(): bool
    {
        return isset($this->worker);
    }

    /**
     * Return an employee
     * @return Human
     */
    public function getWorker(): Human
    {
        if ($this->hasWorker()) {
            return $this->worker;
        }

        return null;
    }

    /**
     * Advert a message
     * @param string $message
     */
    public function advert(string $message)
    {
        try {
            if (empty($message)) {
                throw new Exception("Message is empty");
            }

            echo "Hr advert: $message<br>";
        } catch (Exception $exception) {
            echo "Hr error: {$exception->getMessage()}<br>";
        }
    }


}