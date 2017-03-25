<?php

namespace App\UsersBundle\Services;

use Symfony\Component\HttpFoundation\Session\Session;

class UserService {

    /**
     * @var Session
     */
    private $session;

    /**
     * UserService constructor.
     *
     * @param Session $session Session instance
     */
    public function __construct (Session $session) {
        $this->session = $session;
    }

    /**
     * @return mixed|null
     */
    public function getUser() {
        return $this->session->get('i_ip_p', 1);
    }
}