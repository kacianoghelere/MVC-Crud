<?php

include_once 'Contact.php';

/**
 * Table data gateway.
 * 
 *  OK I'm using old MySQL driver, so kill me ...
 *  This will do for simple apps but for serious apps you should use PDO.
 */
class ContactsGateway {

    public function selectAll($order) {
        if (!isset($order)) {
            $order = "id";
        }
        $dbOrder = mysql_real_escape_string($order);
        $dbres = mysql_query("SELECT * FROM contacts ORDER BY $dbOrder ASC");

        $contacts = array();
        while (($obj = mysql_fetch_object($dbres)) != NULL) {
            $contacts[] = $obj;
        }

        return $contacts;
    }

    public function selectById($id) {
        $dbId = mysql_real_escape_string($id);

        $dbres = mysql_query("SELECT * FROM contacts WHERE id=$dbId");

        $contact = mysql_fetch_object($dbres);
        return $contact;
    }

    public function insert($name, $phone, $email, $address) {

        $dbName = ($name != NULL) ? "'" . mysql_real_escape_string($name) . "'" : 'NULL';
        $dbPhone = ($phone != NULL) ? "'" . mysql_real_escape_string($phone) . "'" : 'NULL';
        $dbEmail = ($email != NULL) ? "'" . mysql_real_escape_string($email) . "'" : 'NULL';
        $dbAddress = ($address != NULL) ? "'" . mysql_real_escape_string($address) . "'" : 'NULL';

        mysql_query("INSERT INTO contacts (name, phone, email, address) VALUES ($dbName, $dbPhone, $dbEmail, $dbAddress)");
        return mysql_insert_id();
    }

    public function update($id, $name, $phone, $email, $address) {
        $dbId = ($id != NULL) ? "'" . mysql_real_escape_string($id) . "'" : 'NULL';
        $dbName = ($name != NULL) ? "'" . mysql_real_escape_string($name) . "'" : 'NULL';
        $dbPhone = ($phone != NULL) ? "'" . mysql_real_escape_string($phone) . "'" : 'NULL';
        $dbEmail = ($email != NULL) ? "'" . mysql_real_escape_string($email) . "'" : 'NULL';
        $dbAddress = ($address != NULL) ? "'" . mysql_real_escape_string($address) . "'" : 'NULL';
        return mysql_query("UPDATE contacts SET name=$dbName, phone=$dbPhone, email=$dbEmail, address=$dbAddress WHERE id=$dbId");
    }

    public function delete($id) {
        $dbId = mysql_real_escape_string($id);
        mysql_query("DELETE FROM contacts WHERE id=$dbId");
    }

}

?>
