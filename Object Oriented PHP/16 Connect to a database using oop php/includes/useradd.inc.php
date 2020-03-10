<?php
include 'includes/class-autoload.inc.php';

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dateOfBirth = $_POST['dateOfBirth'];

        $userAdd = new UserContr();
        if(isset($_POST['submit']))
            $userAdd->createUser($firstName, $lastName, $dateOfBirth);

?>