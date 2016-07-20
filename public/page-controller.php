<?php

//Search
function searchName($contacts) {    
    $name = $_GET['searchedName'];
    if (isValidName($name)) {
        $contacts = searchContact($contacts, trim($name));
    }
    return $contacts;
}

//Save
function saveName(&$contacts) {
    if (isValidPhoneNumber($_POST['number']) && isValidName($_POST['name'])) {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $contact = ['name' => $name, 'number' => $number];
        array_push($contacts, $contact);
        saveContacts($contacts);
    }
}

// Delete:
function deleteContact(&$contacts) {
    $name = $_GET['name'];
    deleteContacts($contacts, $name);
}

