<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 05:27 PM
 */

namespace App;


class VeggieSub extends Sub
{


    public function addPrimaryToppings() {
        var_dump('laying down the Veggies');
        return $this;
    }

}