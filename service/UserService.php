<?php

require_once '../dao/UserDao.php';
require_once '../domain/User.php';
require_once './UserSessionService.php';

class UserServce {

    private $dao;

    function __construct() {
        $dao = new UserDao();
    }

    public function signup($user) {
        return $dao->signup($user);
    }

    public function signin($user) {
        $session = new UserSessionService();
        $user = $dao->signin($user);
        if (!is_null($user)) {
            $session->startSession($user->getId());
        }
        return $user;
    }

    public function logout() {
        $session = new UserSessionService();
        if ($session->is_logged_in()) {
            $session->detroySession();
        }
    }

}
