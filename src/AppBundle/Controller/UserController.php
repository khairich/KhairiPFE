<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\User;
use AppBundle\Form\RegisterType;
use AppBundle\Form\UserType;

class UserController extends Controller {

    private $session;

    /**
     * UserController constructor.
     */
    public function __construct() {
        $this->session = new Session();
    }

    /**
     *
     * @param Request $request
     * @return $this
     */
    public function loginAction(Request $request) {
        // if the user is logged in, it is redirected to / home
        if (is_object($this->getUser())) {
            return $this->redirect('home');
        }

        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        // User information that fails in authentication
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('AppBundle:User:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error
        ));
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function registerAction(Request $request) {
        // if the user is logged in, it is redirected to / home
        if (is_object($this->getUser())) {
            return $this->redirect('home');
        }

        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        // configure form submission data in object user
        $form->handleRequest($request);
        // processed registration form
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                // $user_repo = $em->getRepository("BackendBundle:User");

                $query = $em->createQuery('SELECT u FROM BackendBundle:User u WHERE u.email = :email OR u.nick = :nick')
                        ->setParameter('email', $form->get("email")->getData())
                        ->setParameter('nick', $form->get("nick")->getData());

                $user_isset = $query->getResult();

                if (count($user_isset) == 0) {

                    // password coding
                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($user);
                    $password = $encoder->encodePassword($form->get("password")->getData(), $user->getSalt());

                    // configure remaining data of the User object
                    $user->setPassword($password);
                    $user->setRole("ROLE_USER");
                    $user->setImage(null);

                    $em->persist($user);
                    $flush = $em->flush(); //save in BD

                    if ($flush == null) {
                        $status = "You have Signed in correctly";

                        $this->session->getFlashBag()->add("status", $status);
                        return $this->redirect("login");
                    } else {
                        $status = "Error Signing in";
                    }
                } else {
                    $status = "User already exists !!";
                }
            } else {
                $status = "You have not signed in correctly !!";
            }

            $this->session->getFlashBag()->add("status", $status);
        }

        // create view with form
        return $this->render('AppBundle:User:register.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function nickTestAction(Request $request) {
        $isAjax = $request->isXmlHttpRequest();

        if (!$isAjax) {
            return $this->redirect("register");
        }

        $nick = $request->get("nick");

        $em = $this->getDoctrine()->getManager();
        $user_repo = $em->getRepository("BackendBundle:User");
        $user_isset = $user_repo->findOneBy(array("nick" => $nick));

        $result = "used";
        if (count($user_isset) >= 1 && is_object($user_isset)) {
            $result = "used";
        } else {
            $result = "unused";
        }

        return new Response($result);
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function editUserAction(Request $request) {
        $user = $this->getUser(); //load the user data logged in
        $user_image = $user->getImage(); // old image
        $form = $this->createForm(UserType::class, $user);

        // configure form submission data in object user
        $form->handleRequest($request);
        // processed registration form
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();

                $query = $em->createQuery('SELECT u FROM BackendBundle:User u WHERE u.email = :email OR u.nick = :nick')
                        ->setParameter('email', $form->get("email")->getData())
                        ->setParameter('nick', $form->get("nick")->getData());

                $user_isset = $query->getResult();

                // if the new data (email or nick) of the profile editing form there is no other email or nick in the database or if the session data (email and nick) are the same as those in (BD and data form)
                if (count($user_isset) == 0 || ($user->getEmail() == $user_isset[0]->getEmail() && $user->getNick() == $user_isset[0]->getNick())) {

                    // upload file
                    $file = $form["image"]->getData();

                    if (!empty($file) && $file != null) {
                        $ext = $file->guessExtension(); // obtaining extension
                        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
                            $file_name = $user->getId() . '_imgprofile_' . time() . '.' . $ext;
                            $user_media_route = 'uploads/media/' . $user->getId() . '_usermedia';
                            $file->move($user_media_route, $file_name);

                            $user->setImage($file_name);
                        }
                    } else {
                        $user->setImage($user_image);
                    }

                    $em->persist($user);
                    $flush = $em->flush(); //save in BD

                    if ($flush == null) {
                        $status = "You have modified your data correctly";
                    } else {
                        $status = "Your data could not be modified correctly";
                    }
                } else {
                    $status = "There is already an existing user with email or nick";
                }
            } else {
                $status = "Your data has not been modified correctly";
            }

            $this->session->getFlashBag()->add("status", $status);
            return $this->redirect('my-data');
        }

        return $this->render('AppBundle:User:edit_user.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function usersAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $dql = "SELECT u FROM BackendBundle:User u ORDER BY u.id ASC";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:User:users.html.twig', array(
                    'users' => $pagination
        ));
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function searchAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $search = trim($request->query->get('search', null));


        if ($search == null) {
            return $this->redirect($this->generateUrl('home_publications'));
        }

        $dql = "SELECT u FROM BackendBundle:User u 
                  WHERE u.name LIKE :search 
                  OR u.surname LIKE :search 
                  OR u.nick LIKE :search ORDER BY u.id ASC";
        $query = $em->createQuery($dql)->setParameter('search', "%$search%");

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:User:users.html.twig', array(
                    'users' => $pagination
        ));
    }

    /**
     *
     * @param Request $request
     * @param null $nick
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function profileAction(Request $request, $nick = null) {
        $em = $this->getDoctrine()->getManager();

        if ($nick != null) {
            $user_repo = $em->getRepository('BackendBundle:User');
            $user = $user_repo->findOneBy(array(
                'nick' => $nick
            ));
        } else {
            $user = $this->getUser();
        }

        if (empty($user) || !is_object($user)) {
            return $this->redirect($this->generateUrl('home_publications'));
        }

        $user_id = $user->getId();
        $dql = "SELECT p FROM BackendBundle:Publication p WHERE p.user = $user_id ORDER BY p.id DESC";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:User:profile.html.twig', array(
                    'user' => $user,
                    'publications' => $pagination
        ));
    }

}
