<?php

abstract class HomeChecker {
    protected $successor;
    public abstract function check(HomeStatus $status);

    public function succeedWith(HomeChecker $successor) {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home) {
        if ($this->successor)
            $this->successor->check($home);
    }
}

class Locks extends HomeChecker {
    public function check(HomeStatus $home) {
        if (! $home->locked) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($home);
    }
}

class Lights extends HomeChecker {

    public function check(HomeStatus $status)
    {
        if (! $status->lightsOff) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($status);
    }
}

class Alarm extends HomeChecker {

    public function check(HomeStatus $status)
    {
        if (! $status->alarmOn) {
            throw new Exception('The doors are not locked!! Abort abort.');
        }

        $this->next($status);
    }
}

class HomeStatus {
    public $alarmOn = true;
    public $locked = false;
    public $lightsOff = true;
}


// ...
$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);


$locks->check(new HomeStatus);