<?php
namespace App\UsersBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppUsersBundle extends Bundle {

    /**
     * @return string
     */
    public function getParent() {
        return 'FOSUserBundle';
    }

}
