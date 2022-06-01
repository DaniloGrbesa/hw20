<?php
include "contact_list_class.php";

$contact1 = new CustomerContact("Dragan","Radovanovic","124502350","f");
$contact2 = new CustomerContact("Danilo","Grbesa","50235034","u34qds345");
$contact3 = new BusinessContact("Adresa","Ime","35023414","ohotr54o32");
$contact4 = new BusinessContact("Adresa1","Ime1","5403025","irew11-034lf");

$kontaktLista = new ContactList();

echo $contact1->contains('4');

$kontaktLista->addContact($contact1);
$kontaktLista->addContact($contact2);
$kontaktLista->addContact($contact3);
$kontaktLista->addContact($contact4);


$kontaktLista->listAllContacts();


?>