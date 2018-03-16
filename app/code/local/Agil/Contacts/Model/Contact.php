<?php

class Agil_Contacts_Model_Contact extends Mage_Core_Model_Abstract
{
     public function _construct()
     {
         parent::_construct();
         $this->_init('agil_contacts/contact');
     }
}