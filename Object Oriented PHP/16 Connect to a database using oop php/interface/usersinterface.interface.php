<?php

interface UsersInterface{
    public function getUser($name);
    public function getUsers();
    public function setUser($name, $lastName, $dateOfBirth);
}
