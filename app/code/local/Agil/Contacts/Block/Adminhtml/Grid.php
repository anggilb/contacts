<?php

class Agil_Contacts_Block_Adminhtml_Grid extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_contacts';
        $this->_blockGroup = 'contacts';
        $this->_controller = 'adminhtml_contacts';
        $this->_headerText = 'Manage my contacts';
        parent::__construct();
        $this->_removeButton('add');
    }
}