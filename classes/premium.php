<?php

class Premium extends Membership
{
private $indoor;
private $outdoor;
public function __construct()
{
   $this ->_indoor = [];
   $this->_outdoor=[];

}

    /**
     * @param array $indoor
     */
    public function setIndoor(array $indoor): void
    {
        $this->indoor = $indoor;
    }

    /**
     * @param array $outdoor
     */
    public function setOutdoor(array $outdoor): void
    {
        $this->outdoor = $outdoor;
    }

}