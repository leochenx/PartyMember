<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'ibw_partymember_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'ibw_partymember' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partymember/',    ),  ),  4 =>   array (  ),),
        'ibw_partymember_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/partymember',    ),  ),  4 =>   array (  ),),
        'ibw_partymember_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partymember/new',    ),  ),  4 =>   array (  ),),
        'ibw_partymember_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partymember/create',    ),  ),  4 =>   array (  ),),
        'ibw_partymember_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/partymember',    ),  ),  4 =>   array (  ),),
        'ibw_partymember_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/partymember',    ),  ),  4 =>   array (  ),),
        'ibw_partymember_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/partymember',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'sonata_admin_redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'sonata_admin_dashboard',    'permanent' => 'true',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'sonata_admin_dashboard' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard',    ),  ),  4 =>   array (  ),),
        'sonata_admin_retrieve_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/get-form-field-element',    ),  ),  4 =>   array (  ),),
        'sonata_admin_append_form_element' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/append-form-field-element',    ),  ),  4 =>   array (  ),),
        'sonata_admin_short_object_information' => array (  0 =>   array (    0 => '_format',  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',    '_format' => 'html',  ),  2 =>   array (    '_format' => 'html|json',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|json',      3 => '_format',    ),    1 =>     array (      0 => 'text',      1 => '/admin/core/get-short-object-description',    ),  ),  4 =>   array (  ),),
        'sonata_admin_set_object_field_value' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/core/set-object-field-value',    ),  ),  4 =>   array (  ),),
        'sonata_admin_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/search',    ),  ),  4 =>   array (  ),),
        'admin_ibw_partymember_partymember_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::listAction',    '_sonata_admin' => 'ibw.partymember.admin.partymember',    '_sonata_name' => 'admin_ibw_partymember_partymember_list',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/partymember/partymember/list',    ),  ),  4 =>   array (  ),),
        'admin_ibw_partymember_partymember_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::createAction',    '_sonata_admin' => 'ibw.partymember.admin.partymember',    '_sonata_name' => 'admin_ibw_partymember_partymember_create',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/partymember/partymember/create',    ),  ),  4 =>   array (  ),),
        'admin_ibw_partymember_partymember_batch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::batchAction',    '_sonata_admin' => 'ibw.partymember.admin.partymember',    '_sonata_name' => 'admin_ibw_partymember_partymember_batch',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/partymember/partymember/batch',    ),  ),  4 =>   array (  ),),
        'admin_ibw_partymember_partymember_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::editAction',    '_sonata_admin' => 'ibw.partymember.admin.partymember',    '_sonata_name' => 'admin_ibw_partymember_partymember_edit',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/partymember/partymember',    ),  ),  4 =>   array (  ),),
        'admin_ibw_partymember_partymember_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::deleteAction',    '_sonata_admin' => 'ibw.partymember.admin.partymember',    '_sonata_name' => 'admin_ibw_partymember_partymember_delete',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/partymember/partymember',    ),  ),  4 =>   array (  ),),
        'admin_ibw_partymember_partymember_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::showAction',    '_sonata_admin' => 'ibw.partymember.admin.partymember',    '_sonata_name' => 'admin_ibw_partymember_partymember_show',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/ibw/partymember/partymember',    ),  ),  4 =>   array (  ),),
        'admin_ibw_partymember_partymember_export' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::exportAction',    '_sonata_admin' => 'ibw.partymember.admin.partymember',    '_sonata_name' => 'admin_ibw_partymember_partymember_export',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ibw/partymember/partymember/export',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
