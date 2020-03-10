<?php

interface TestInterface{
    public function getUsers();
    public function getUsersStmt($firstname, $lastname);
    public function setUsersStmt($firstname, $lastname, $dob);
}