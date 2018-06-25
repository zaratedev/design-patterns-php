<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 04:32 PM
 */

namespace App;


class Nook implements eReaderInterface
{
    public function turnOn() {
        var_dump('Turn the Nook on');
    }

    public function pressNextButton() {
        var_dump('press the next button on the Nook');
    }
}