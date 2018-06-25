<?php
/**
 * Created by PhpStorm.
 * User: zaratedev
 * Date: 25/06/18
 * Time: 04:34 PM
 */

namespace App;

interface eReaderInterface
{
    public function turnOn();

    public function pressNextButton();
}