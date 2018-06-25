<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 05:31 PM
 */

namespace App;


abstract class Sub
{
    public function make() {
        return $this->layBread()->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }


    protected function layBread() {
        var_dump('laying down the bread');
        return $this;
    }

    protected function addLettuce() {
        var_dump('laying down the lettuce');
        return $this;
    }

    protected function addSauces() {
        var_dump('laying down the sauces');
        return $this;
    }

    protected abstract function addPrimaryToppings();
}