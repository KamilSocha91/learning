<?php

namespace App\UsersBundle\Controller;

use App\UsersBundle\Entity\User;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends BaseController {

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws AccessDeniedException
     */
    public function showAction() {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        $this->get("app.services.breadcrumbs")->addItem("Home", "homepage")
            ->addItem("profile.name");

        return $this->render('AppUsersBundle:Profile:show.html.twig', array(
            'user' => $user
        ));
    }

    /**
     * @param Request $request Request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction(Request $request) {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $this->get("app.services.breadcrumbs")
            ->addItem("Home", "homepage")
            ->addItem('profile.name', 'fos_user_profile_show')
            ->addItem('profile.edit.name');

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $this->createForm('app_user_profile');
        $form->setData($user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $userManager = $this->get('fos_user.user_manager');
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);
            $userManager->updateUser($user);
            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('fos_user_profile_show');
                $response = new RedirectResponse($url);
            }
            $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED,
                new FilterUserResponseEvent($user, $request, $response));

            return $response;
        }

        return $this->render('AppUsersBundle:Profile:edit.html.twig', [
            'form' => $form->createView()
        ]);
    }

}