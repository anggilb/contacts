<?php

class Agil_Contacts_Block_Adminhtml_Contacts_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
   public function __construct()
   {
        parent::__construct();
        $this->setId('contactsGrid');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
   }

   protected function _prepareCollection()
      $collection = Mage::getModel('agil_contacts/contact')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
    }

   protected function _prepareColumns()
   {
       $this->addColumn('id',
             array(
                    'header' => 'ID',
                    'align' =>'right',
                    'width' => '50px',
                    'index' => 'id',
               ));

       $this->addColumn('name',
               array(
                    'header' => 'name',
                    'align' =>'left',
                    'index' => 'name',
              ));

       $this->addColumn('email',
               array(
                    'header' => 'email',
                    'align' =>'left',
                    'index' => 'email',
              ));
       
       $this->addColumn('telephone',
               array(
                    'header' => 'telephone',
                    'align' =>'left',
                    'index' => 'telephone',
              ));
       
       $this->addColumn('comment',
               array(
                    'header' => 'comment',
                    'align' =>'left',
                    'index' => 'comment',
              ));
       
         return parent::_prepareColumns();
    }

    public function getRowUrl($row)
    {
         return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
    
    public function getGridUrl()
    {
        return $this->getUrl('*/*/grid', array('_current'=>true));
    }
}