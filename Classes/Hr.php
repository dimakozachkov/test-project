<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:50
 */

require_once("./Classes/Human.php");
require_once("./Interfaces/Work.php");

class Hr implements Work
{

    private $worker = null;

    public function __construct(Human &$worker) {
        $this->worker = $worker;
        $worker->setWork($this);
    }

    public function setWorker(Human $worker) {
        $this->worker = $worker;
    }

    public function hasWorker(): bool {
        return isset($this->worker);
    }

    public function getWorker(): Human {
        if ($this->hasWorker()) {
            return $this->worker;
        }
        
        return null;
    }

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