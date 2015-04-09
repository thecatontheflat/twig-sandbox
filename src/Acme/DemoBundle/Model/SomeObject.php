<?php

namespace Acme\DemoBundle\Model;

class SomeObject
{
    private $property = 'My property';

    public function getProperty()
    {
        return $this->property;
    }
}