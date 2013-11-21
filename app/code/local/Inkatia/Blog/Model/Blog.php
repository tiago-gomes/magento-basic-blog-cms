<?php

class Inkatia_Blog_Model_Blog extends Mage_Core_Model_Abstract 
{ 
	public function _construct()
    {
        parent::_construct();
        /*
         *  Initiate the resource model
         */
        $this->_init('blog/blog');
    }
}