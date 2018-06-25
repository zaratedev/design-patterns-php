<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 05:15 PM
 */

namespace App;


class TurkeySub extends Sub
{
    public function addPrimaryToppings() {
        var_dump('laying down the Turkey');
        return $this;
    }

}