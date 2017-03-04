<?php
require_once 'SessionService.php';
require_once '../domain/User.php';
require_once '../dao/UserDao.php';
class UserSessionService extends SessionService {

    public function startSession($id) {
        if (empty($_SESSION['user'])) {
            $_SESSION['user'] = $id;
        }
    }

    public function getCurrentUser() {
        if ($this->is_logged_in()) {
            $dao = new UserDAO();
            $user = $dao->getUser($_SESSION['user']);
            return $user;
        }
        return NULL;
    }

    public function getCurrentUserId() {
        return $_SESSION['user'];
    }

    public function detroySession() {
        unset($_SESSION['user']);
    }

    public function is_logged_in() {
        if (!empty($_SESSION['user'])) {
            return true;
        }
        return false;
    }

}
