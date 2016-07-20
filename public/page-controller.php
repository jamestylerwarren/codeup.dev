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

// function saveContactMessage($hidden, $saveMessage) {
//     $hidden = '';
//     $saveMessage = 'Contact Saved!';
//     return [$hidden, $saveMessage];
// }

