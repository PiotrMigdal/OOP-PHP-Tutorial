<?php

class Users extends Dbh {

    //Only classes that extends users, can access this
    protected function getUser($username) {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        $results = $stmt->fetchAll();
        return $results;

    }

    protected function setUser($username, $name) {
        // We prepare function to avoid mysql injection, so we use question marks and enter values when execute
        $sql = "INSERT INTO users(username, name) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $name]);
    }
}