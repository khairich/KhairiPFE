<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/groupe')) {
            // groupe_index
            if (rtrim($pathinfo, '/') === '/groupe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groupe_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'groupe_index');
                }

                return array (  '_controller' => 'Groupes\\SNBundle\\Controller\\groupeController::indexAction',  '_route' => 'groupe_index',);
            }
            not_groupe_index:

            // groupe_show
            if (preg_match('#^/groupe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_groupe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_show')), array (  '_controller' => 'Groupes\\SNBundle\\Controller\\groupeController::showAction',));
            }
            not_groupe_show:

            // groupe_new
            if ($pathinfo === '/groupe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_groupe_new;
                }

                return array (  '_controller' => 'Groupes\\SNBundle\\Controller\\groupeController::newAction',  '_route' => 'groupe_new',);
            }
            not_groupe_new:

            // groupe_edit
            if (preg_match('#^/groupe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_groupe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_edit')), array (  '_controller' => 'Groupes\\SNBundle\\Controller\\groupeController::editAction',));
            }
            not_groupe_edit:

            // groupe_delete
            if (preg_match('#^/groupe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_groupe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupe_delete')), array (  '_controller' => 'Groupes\\SNBundle\\Controller\\groupeController::deleteAction',));
            }
            not_groupe_delete:

        }

        // groupes_sn_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'groupes_sn_homepage');
            }

            return array (  '_controller' => 'Groupes\\SNBundle\\Controller\\DefaultController::indexAction',  '_route' => 'groupes_sn_homepage',);
        }

        if (0 === strpos($pathinfo, '/cv')) {
            // cv_index
            if (rtrim($pathinfo, '/') === '/cv') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cv_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cv_index');
                }

                return array (  '_controller' => 'Resume\\SNBundle\\Controller\\CvController::indexAction',  '_route' => 'cv_index',);
            }
            not_cv_index:

            // cv_show
            if (preg_match('#^/cv/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cv_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_show')), array (  '_controller' => 'Resume\\SNBundle\\Controller\\CvController::showAction',));
            }
            not_cv_show:

            // cv_new
            if ($pathinfo === '/cv/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cv_new;
                }

                return array (  '_controller' => 'Resume\\SNBundle\\Controller\\CvController::newAction',  '_route' => 'cv_new',);
            }
            not_cv_new:

            // cv_edit
            if (preg_match('#^/cv/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cv_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_edit')), array (  '_controller' => 'Resume\\SNBundle\\Controller\\CvController::editAction',));
            }
            not_cv_edit:

            // cv_delete
            if (preg_match('#^/cv/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cv_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_delete')), array (  '_controller' => 'Resume\\SNBundle\\Controller\\CvController::deleteAction',));
            }
            not_cv_delete:

        }

        // cv_pdf
        if (0 === strpos($pathinfo, '/pdf') && preg_match('#^/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cv_pdf')), array (  '_controller' => 'Resume\\SNBundle\\Controller\\CvController::PDFAction',));
        }

        // resume_sn_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'resume_sn_homepage');
            }

            return array (  '_controller' => 'Resume\\SNBundle\\Controller\\DefaultController::indexAction',  '_route' => 'resume_sn_homepage',);
        }

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
