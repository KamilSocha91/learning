<?php

namespace App\UsersBundle\Security\Core\User;

use Designers\CompanyBundle\Entity\Company;
use Doctrine\ORM\EntityManager;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\User\UserInterface;

class FOSUBUserProvider extends BaseClass {

    private $em;

    private $api;

    /**
     * @param \FOS\UserBundle\Model\UserManagerInterface $userManager User manager
     * @param array                                      $properties  Properties
     * @param EntityManager                              $em          Entity manager
     */
    public function __construct ( $userManager, array $properties, $em) {
        parent::__construct($userManager, $properties);
        $this->em = $em;
    }

    /**
     * {@inheritDoc}
     *
     * @param UserInterface         $user     User
     * @param UserResponseInterface $response Response
     *
     * @return void
     */
    public function connect(UserInterface $user, UserResponseInterface $response) {
        $property = $this->getProperty($response);
        $username = $response->getUsername();

        //on connect - get the access token and the user ID
        $service = $response->getResourceOwner()->getName();

        $setter = 'set'.ucfirst($service);
        $setter_id = $setter.'Id';
        $setter_token = $setter.'AccessToken';

        //we "disconnect" previously connected users
        if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
            $previousUser->$setter_id(null);
            $previousUser->$setter_token(null);
            $this->userManager->updateUser($previousUser);
        }

        //we connect current user
        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());

        $this->userManager->updateUser($user);
    }

    /**
     * {@inheritdoc}
     *
     * @param UserResponseInterface $response Response
     *
     * @return \FOS\UserBundle\Model\UserInterface
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response) {
        $useremail = $response->getEmail();

        return false;
    }

}