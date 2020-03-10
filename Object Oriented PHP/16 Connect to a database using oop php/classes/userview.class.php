<?php

class UserView extends Users{

    public function showUser($name){
        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['user_firstname'] . " " . $results[0]['user_lastname'];
        echo "<br> Date of birth: " . $results[0]['user_dateofbirth'];
    }

    public function showUsers(){
        $stmt = $this->getUsers();
        while ($row = $stmt->fetch()) {
            echo $row['user_firstname'] . ' '. $row['user_lastname'] . ': ' . $row['user_dateofbirth'] . '<br>';
        }
    }
}