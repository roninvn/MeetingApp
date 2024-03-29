<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // MeetingAppCoreBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MeetingApp\\CoreBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'MeetingAppCoreBundle_homepage'));
        }

        // MeetingAppCoreBundle_GetAllRoles
        if ($pathinfo === '/roles/getall') {
            return array (  '_controller' => 'MeetingApp\\CoreBundle\\Controller\\UsersRoleController::getAllRolesAction',  '_route' => 'MeetingAppCoreBundle_GetAllRoles',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
