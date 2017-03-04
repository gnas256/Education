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
            $username = $user->getUsername();
            $password = $user->getPassword();
            $email = $user->getEmail();
            $name = $user->getName();
            $type = $user->getType();
            $stmt->bind_Param('ssssi', $username, $password, $email, $name, $type);
            $result = $stmt->execute();
            $stmt->close();
            $conn->closeConnection();
            return true;
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
            $username = $user->getUsername();
            $password = $user->getPassword();
            $stmt->bind_Param('ss', $username, $password);
            $result = $stmt->execute();
//            $stmt->close();
//            $conn->closeConnection();
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
    
    public function getUser($id) {
        $conn = new Connection();
//        $user = new User();
        if ($conn->testConnection()) {
            $sql = "SELECT email, name, type FROM user WHERE id = ?";
            $stmt = $conn->getConnection()->prepare($sql);
//            echo $id;
            $stmt->bind_Param('i', $id);
            $result = $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($email, $name, $type);
            $stmt->fetch();
            if ($stmt->num_rows == 0) {
                return NULL;
            }
            $user = new User();
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
