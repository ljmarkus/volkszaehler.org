<?php

namespace Volkszaehler\Model\Proxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class VolkszaehlerModelDataProxy extends \Volkszaehler\Model\Data implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function toArray()
    {
        $this->_load();
        return parent::toArray();
    }

    public function getValue()
    {
        $this->_load();
        return parent::getValue();
    }

    public function getTimestamp()
    {
        $this->_load();
        return parent::getTimestamp();
    }

    public function getChannel()
    {
        $this->_load();
        return parent::getChannel();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'timestamp', 'value', 'channel');
    }
}