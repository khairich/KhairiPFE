<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/competence')) {
            // competence_index
            if (rtrim($pathinfo, '/') === '/competence') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_competence_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'competence_index');
                }

                return array (  '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::indexAction',  '_route' => 'competence_index',);
            }
            not_competence_index:

            // competence_show
            if (preg_match('#^/competence/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_competence_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competence_show')), array (  '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::showAction',));
            }
            not_competence_show:

            // competence_new
            if ($pathinfo === '/competence/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_competence_new;
                }

                return array (  '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::newAction',  '_route' => 'competence_new',);
            }
            not_competence_new:

            // competence_edit
            if (preg_match('#^/competence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_competence_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competence_edit')), array (  '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::editAction',));
            }
            not_competence_edit:

            // competence_delete
            if (preg_match('#^/competence/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_competence_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'competence_delete')), array (  '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::deleteAction',));
            }
            not_competence_delete:

            // competence_recherche
            if ($pathinfo === '/competence/recherche') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_competence_recherche;
                }

                return array (  '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::RechercheAction',  '_route' => 'competence_recherche',);
            }
            not_competence_recherche:

        }

        // khairi_sn_esprit_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'khairi_sn_esprit_homepage');
            }

            return array (  '_controller' => 'Khairi\\SNEspritBundle\\Controller\\DefaultController::indexAction',  '_route' => 'khairi_sn_esprit_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  '_route' => 'register',);
        }

        // user_nick_test
        if ($pathinfo === '/nick-test') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::nickTestAction',  '_route' => 'user_nick_test',);
        }

        // user_edit
        if ($pathinfo === '/my-data') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::editUserAction',  '_route' => 'user_edit',);
        }

        // user_list
        if ($pathinfo === '/people') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::usersAction',  '_route' => 'user_list',);
        }

        // user_search
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'AppBundle\\Controller\\UserController::searchAction',  '_route' => 'user_search',);
        }

        // user_profile
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user(?:/(?P<nick>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile')), array (  '_controller' => 'AppBundle\\Controller\\UserController::profileAction',  'nick' => NULL,));
        }

        // home_publications
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\PublicationController::publicationsAction',  '_route' => 'home_publications',);
        }

        // remove_publication
        if (0 === strpos($pathinfo, '/publication/remove') && preg_match('#^/publication/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_publication')), array (  '_controller' => 'AppBundle\\Controller\\PublicationController::removePublicationAction',));
        }

        // follow_follow
        if ($pathinfo === '/follow') {
            return array (  '_controller' => 'AppBundle\\Controller\\FollowController::followAction',  '_route' => 'follow_follow',);
        }

        // follow_unfollow
        if ($pathinfo === '/unfollow') {
            return array (  '_controller' => 'AppBundle\\Controller\\FollowController::unfollowAction',  '_route' => 'follow_unfollow',);
        }

        // follows_list_users
        if (0 === strpos($pathinfo, '/follows') && preg_match('#^/follows(?:/(?P<nick>[^/]++)(?:/(?P<type>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'follows_list_users')), array (  '_controller' => 'AppBundle\\Controller\\FollowController::followsListAction',  'nick' => NULL,  'type' => NULL,));
        }

        // like_publication
        if (0 === strpos($pathinfo, '/like') && preg_match('#^/like(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'like_publication')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::likeAction',  'id' => NULL,));
        }

        // dislike_publication
        if (0 === strpos($pathinfo, '/dislike') && preg_match('#^/dislike(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dislike_publication')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::dislikeAction',  'id' => NULL,));
        }

        // user_likes
        if (0 === strpos($pathinfo, '/likes') && preg_match('#^/likes(?:/(?P<nick>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_likes')), array (  '_controller' => 'AppBundle\\Controller\\LikeController::likesListAction',  'nick' => NULL,));
        }

        if (0 === strpos($pathinfo, '/notifications')) {
            // notifications_page
            if ($pathinfo === '/notifications') {
                return array (  '_controller' => 'AppBundle\\Controller\\NotificationController::notificationsAction',  '_route' => 'notifications_page',);
            }

            // notifications_ajax
            if ($pathinfo === '/notifications/get') {
                return array (  '_controller' => 'AppBundle\\Controller\\NotificationController::countNotificationsAction',  '_route' => 'notifications_ajax',);
            }

        }

        if (0 === strpos($pathinfo, '/private-message')) {
            // private_message_index
            if ($pathinfo === '/private-message') {
                return array (  '_controller' => 'AppBundle\\Controller\\PrivateMessageController::indexPrivateMessageAction',  '_route' => 'private_message_index',);
            }

            // private_message_sended
            if ($pathinfo === '/private-message/sended') {
                return array (  '_controller' => 'AppBundle\\Controller\\PrivateMessageController::sendedAction',  '_route' => 'private_message_sended',);
            }

            // private_message_notification
            if ($pathinfo === '/private-message/notification/get') {
                return array (  '_controller' => 'AppBundle\\Controller\\PrivateMessageController::notReadedAction',  '_route' => 'private_message_notification',);
            }

        }

        // app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  '_route' => 'app_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
