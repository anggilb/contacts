<?php

class Agil_Contacts_Model_Observer {
    public function saveContact($observer) {
        $event = $observer->getEvent()->getData();
        $data = $event['data']->getData();

        $contact = Mage::getModel('agil_contacts/contact');
        $contact->setName($data['name']);
        $contact->setEmail($data['email']);
        $contact->setTelephone($data['telephone']);
        $contact->setComment($data['comment']);
        $contact->save();
    } 
}