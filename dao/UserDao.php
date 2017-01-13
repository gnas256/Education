<?php

require_once '../config/connection.php';
require_once '../domain/User.php';

class UserDao {

    public function signup($user) {
        $conn = new Connection();
//        $user = new User();
        if ($conn->testConnection()) {
            $sql = "INSERT INTO user (username, password, email, name, type) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->getConnection()->prepare($sql);
            $stmt->bind_Param('ssssi', $user->getUsername(), $user->getPassword(), $user->getEmail(), $user->getName(), $user->getType());
            $result = $stmt->execute();
            $stmt->close();
            $conn->closeConnection();
            return $result;
        } else {
            return false;
        }
    }

    public function signin($user) {
        $conn = new Connection();
//        $user = new User();
        if ($conn->testConnection()) {
            $sql = "SELECT id, email, name, type FROM user WHERE username = ? AND password = ?";
            $stmt = $conn->getConnection()->prepare($sql);
            $stmt->bind_Param('ss', $user->getUsername(), $user->getPassword());
            $result = $stmt->execute();
            $stmt->close();
            $conn->closeConnection();
            $stmt->store_result();
            $stmt->bind_result($id, $email, $name, $type);
            $stmt->fetch();
            if ($stmt->num_rows == 0) {
                return NULL;
            }
//            $user = new User();
            $user->setId($id);
            $user->setEmail($email);
            $user->setName($name);
            $user->setType($type);
            $stmt->close();
            $conn->closeConnection();
            return $user;
        } else {
            return false;
        }
    }

}
