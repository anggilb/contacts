<?php

class Agil_Contacts_Model_Resource_Contact extends Mage_Core_Model_Resource_Db_Abstract
{
     public function _construct()
     {
         $this->_init('agil_contacts/contact', 'id');
     }
}