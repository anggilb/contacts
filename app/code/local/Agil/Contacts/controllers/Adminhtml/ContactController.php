<?php
 
class Agil_Contacts_Adminhtml_ContactController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Contacts'))->_title($this->__('Contacts'));
        $this->loadLayout();
        $this->_setActiveMenu('sales/sales');
        $this->_addContent($this->getLayout()->createBlock('agil_contacts/adminhtml_contacts_grid'));
        $this->renderLayout();
    }
 
    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('agil_contacts/adminhtml_contacts_grid')->toHtml()
        );
    }
}