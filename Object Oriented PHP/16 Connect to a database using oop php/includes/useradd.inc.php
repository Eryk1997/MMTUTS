<?php
include 'includes/class-autoload.inc.php';

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dateOfBirth = $_POST['dateOfBirth'];

        $testObj = new Test();
        if(isset($_POST['submit'])){
            $testObj->setUsersStmt("$firstName","$lastName","$dateOfBirth");
        }

?>