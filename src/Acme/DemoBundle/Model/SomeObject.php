<?php

namespace Acme\DemoBundle\Model;

class SomeObject
{
    const SOME_CONSTANT = 'Woah, how did you get me??';
    private $property = 'My property';

    public function getProperty()
    {
        return $this->property;
    }
}