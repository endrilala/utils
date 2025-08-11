<?php

namespace infosoftsd\utils\shopping\persistence;

class NullPersistenceStrategy implements CartPersistentInterface
{
    public function save($data)
    {
    }

    public function load()
    {
    }

    public function clear()
    {
    }
}