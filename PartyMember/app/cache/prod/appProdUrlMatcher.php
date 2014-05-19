<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // ibw_partymember_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_partymember_homepage');
            }

            return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::indexAction',  '_route' => 'ibw_partymember_homepage',);
        }

        if (0 === strpos($pathinfo, '/partymember')) {
            // ibw_partymember
            if (rtrim($pathinfo, '/') === '/partymember') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ibw_partymember');
                }

                return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::indexAction',  '_route' => 'ibw_partymember',);
            }

            // ibw_partymember_show
            if (preg_match('#^/partymember/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_show')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::showAction',));
            }

            // ibw_partymember_new
            if ($pathinfo === '/partymember/new') {
                return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::newAction',  '_route' => 'ibw_partymember_new',);
            }

            // ibw_partymember_create
            if ($pathinfo === '/partymember/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ibw_partymember_create;
                }

                return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::createAction',  '_route' => 'ibw_partymember_create',);
            }
            not_ibw_partymember_create:

            // ibw_partymember_edit
            if (preg_match('#^/partymember/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_edit')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::editAction',));
            }

            // ibw_partymember_update
            if (preg_match('#^/partymember/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ibw_partymember_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_update')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::updateAction',));
            }
            not_ibw_partymember_update:

            // ibw_partymember_delete
            if (preg_match('#^/partymember/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ibw_partymember_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_partymember_delete')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberController::deleteAction',));
            }
            not_ibw_partymember_delete:

        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/ibw/partymember/partymember')) {
                // admin_ibw_partymember_partymember_list
                if ($pathinfo === '/admin/ibw/partymember/partymember/list') {
                    return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::listAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_list',  '_route' => 'admin_ibw_partymember_partymember_list',);
                }

                // admin_ibw_partymember_partymember_create
                if ($pathinfo === '/admin/ibw/partymember/partymember/create') {
                    return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::createAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_create',  '_route' => 'admin_ibw_partymember_partymember_create',);
                }

                // admin_ibw_partymember_partymember_batch
                if ($pathinfo === '/admin/ibw/partymember/partymember/batch') {
                    return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::batchAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_batch',  '_route' => 'admin_ibw_partymember_partymember_batch',);
                }

                // admin_ibw_partymember_partymember_edit
                if (preg_match('#^/admin/ibw/partymember/partymember/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymember_edit')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::editAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_edit',));
                }

                // admin_ibw_partymember_partymember_delete
                if (preg_match('#^/admin/ibw/partymember/partymember/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymember_delete')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::deleteAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_delete',));
                }

                // admin_ibw_partymember_partymember_show
                if (preg_match('#^/admin/ibw/partymember/partymember/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymember_show')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::showAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_show',));
                }

                // admin_ibw_partymember_partymember_export
                if ($pathinfo === '/admin/ibw/partymember/partymember/export') {
                    return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberAdminController::exportAction',  '_sonata_admin' => 'ibw.partymember.admin.partymember',  '_sonata_name' => 'admin_ibw_partymember_partymember_export',  '_route' => 'admin_ibw_partymember_partymember_export',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
