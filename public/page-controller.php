<?php
//Search
function searchName($contacts) {
    $data = [
        'searchMessage' => 'Search result:',
        'searchClass' => 'alert-success',
        'contacts' => $contacts
    ];  
    $name = $_GET['searchedName'];  
    $contacts = searchContact($contacts, trim($name));
    if (isValidName($name) && !empty($contacts)) {
        $data['searchMessage'] = 'Search results: ';
        $data['searchClass'] = 'alert-success';
        $data['contacts'] = searchContact($contacts, trim($name));
    } else {
        $data['searchMessage'] = 'No search results';
        $data['searchClass'] = 'alert-danger';
        $data['contacts'] = loadContacts();
    }
    return $data;
}

//Save
function saveName(&$contacts) {
    $data = [
        'saveMessage' => 'Contact saved',
        'class' => 'alert-success'
    ];
    if (!isValidPhoneNumber($_POST['number']) || !isValidName($_POST['name'])) {
        $data['saveMessage'] = 'Name or number incorrect';
        $data['class'] = 'alert-danger';
    } else {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $contact = ['name' => $name, 'number' => $number];
        array_push($contacts, $contact);
    }
    return $data;
}

// Delete:
function deleteContact(&$contacts) {
    $name = $_GET['name'];
    deleteContacts($contacts, $name);
}