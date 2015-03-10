<?php

class Contact {

    private $id;
    private $name;
    private $phone;
    private $email;
    private $address;

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getPhone() {
        return $this->phone;
    }

    function getAddress() {
        return $this->address;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setAddress($address) {
        $this->address = $address;
    }

}
