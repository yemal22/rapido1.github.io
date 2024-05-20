<?php 
class ContactController{
    public function index(){
        include_once 'views/contact.php';
    }
    public function sendContact() {
        include_once 'handlers/send_contact.php';
    }
}