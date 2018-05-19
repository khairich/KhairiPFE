<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'competence_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competence/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competence_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/competence',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competence_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competence/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competence_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/competence',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competence_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/competence',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competence_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Khairi\\SNEspritBundle\\Controller\\CompetenceController::RechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competence/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'khairi_sn_esprit_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Khairi\\SNEspritBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_nick_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::nickTestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nick-test',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::editUserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/my-data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::usersAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/people',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_profile' => array (  0 =>   array (    0 => 'nick',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::profileAction',    'nick' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nick',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_publications' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PublicationController::publicationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_publication' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PublicationController::removePublicationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/publication/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'follow_follow' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FollowController::followAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/follow',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'follow_unfollow' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FollowController::unfollowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/unfollow',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'follows_list_users' => array (  0 =>   array (    0 => 'nick',    1 => 'type',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\FollowController::followsListAction',    'nick' => NULL,    'type' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'type',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nick',    ),    2 =>     array (      0 => 'text',      1 => '/follows',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'like_publication' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LikeController::likeAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/like',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dislike_publication' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LikeController::dislikeAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/dislike',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_likes' => array (  0 =>   array (    0 => 'nick',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LikeController::likesListAction',    'nick' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nick',    ),    1 =>     array (      0 => 'text',      1 => '/likes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notifications_page' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NotificationController::notificationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notifications_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\NotificationController::countNotificationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/notifications/get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'private_message_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrivateMessageController::indexPrivateMessageAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private-message',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'private_message_sended' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrivateMessageController::sendedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private-message/sended',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'private_message_notification' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrivateMessageController::notReadedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/private-message/notification/get',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
