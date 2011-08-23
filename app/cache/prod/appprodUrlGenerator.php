<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'MeetingAppCoreBundle_homepage' => true,
       'MeetingAppCoreBundle_GetAllRoles' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getMeetingAppCoreBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MeetingApp\\CoreBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getMeetingAppCoreBundle_GetAllRolesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MeetingApp\\CoreBundle\\Controller\\UsersRoleController::getAllRolesAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/roles/getall',  ),));
    }
}
