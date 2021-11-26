<?php

class UsersView extends Users {
    public function showUser($username)
    {
        $results = $this->getUser($username);
        echo "Name: " . $results[0]['name'];
    }
}