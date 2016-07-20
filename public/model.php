<?php
// Model
function addContact(&$contacts, $name, $number)
{
    $contacts[] = [
        'name' => $name,
        'number' => $number,
    ];
}

function searchContact($contacts, $name)
{
    $matches = [];
    foreach ($contacts as $contact) {
        if (stripos($contact['name'], $name) !== false) {
            $matches[] = $contact;
        }
    }
    return $matches;
}

function deleteContacts(&$contacts, $name)
{   
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'w');
    foreach ($contacts as $index => $contact) {
        if (strpos($contact['name'], $name) !== false) {
            unset($contacts[$index]);
        } 
    }
    saveContacts($contacts);
}


