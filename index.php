<?php

require_once 'controller/ContactsController.php';

try {
    $controller = new ContactsController();

    $controller->handleRequest();
} catch (Exception $exc) {
    print $exc;
}
?>
