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

            if (0 === strpos($pathinfo, '/admin/ibw/partymember')) {
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

                if (0 === strpos($pathinfo, '/admin/ibw/partymember/applypartymember')) {
                    // admin_ibw_partymember_applypartymember_list
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/list') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::listAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_list',  '_route' => 'admin_ibw_partymember_applypartymember_list',);
                    }

                    // admin_ibw_partymember_applypartymember_create
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/create') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::createAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_create',  '_route' => 'admin_ibw_partymember_applypartymember_create',);
                    }

                    // admin_ibw_partymember_applypartymember_batch
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/batch') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::batchAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_batch',  '_route' => 'admin_ibw_partymember_applypartymember_batch',);
                    }

                    // admin_ibw_partymember_applypartymember_edit
                    if (preg_match('#^/admin/ibw/partymember/applypartymember/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_applypartymember_edit')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::editAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_edit',));
                    }

                    // admin_ibw_partymember_applypartymember_delete
                    if (preg_match('#^/admin/ibw/partymember/applypartymember/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_applypartymember_delete')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::deleteAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_delete',));
                    }

                    // admin_ibw_partymember_applypartymember_show
                    if (preg_match('#^/admin/ibw/partymember/applypartymember/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_applypartymember_show')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::showAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_show',));
                    }

                    // admin_ibw_partymember_applypartymember_export
                    if ($pathinfo === '/admin/ibw/partymember/applypartymember/export') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\ApplyPartymemberAdminController::exportAction',  '_sonata_admin' => 'ibw.partymember.admin.applypartymember',  '_sonata_name' => 'admin_ibw_partymember_applypartymember_export',  '_route' => 'admin_ibw_partymember_applypartymember_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ibw/partymember/partymemberbranch')) {
                    // admin_ibw_partymember_partymemberbranch_list
                    if ($pathinfo === '/admin/ibw/partymember/partymemberbranch/list') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberBranchAdminController::listAction',  '_sonata_admin' => 'ibw.partymember.admin.partymemberbranch',  '_sonata_name' => 'admin_ibw_partymember_partymemberbranch_list',  '_route' => 'admin_ibw_partymember_partymemberbranch_list',);
                    }

                    // admin_ibw_partymember_partymemberbranch_create
                    if ($pathinfo === '/admin/ibw/partymember/partymemberbranch/create') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberBranchAdminController::createAction',  '_sonata_admin' => 'ibw.partymember.admin.partymemberbranch',  '_sonata_name' => 'admin_ibw_partymember_partymemberbranch_create',  '_route' => 'admin_ibw_partymember_partymemberbranch_create',);
                    }

                    // admin_ibw_partymember_partymemberbranch_batch
                    if ($pathinfo === '/admin/ibw/partymember/partymemberbranch/batch') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberBranchAdminController::batchAction',  '_sonata_admin' => 'ibw.partymember.admin.partymemberbranch',  '_sonata_name' => 'admin_ibw_partymember_partymemberbranch_batch',  '_route' => 'admin_ibw_partymember_partymemberbranch_batch',);
                    }

                    // admin_ibw_partymember_partymemberbranch_edit
                    if (preg_match('#^/admin/ibw/partymember/partymemberbranch/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymemberbranch_edit')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberBranchAdminController::editAction',  '_sonata_admin' => 'ibw.partymember.admin.partymemberbranch',  '_sonata_name' => 'admin_ibw_partymember_partymemberbranch_edit',));
                    }

                    // admin_ibw_partymember_partymemberbranch_delete
                    if (preg_match('#^/admin/ibw/partymember/partymemberbranch/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymemberbranch_delete')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberBranchAdminController::deleteAction',  '_sonata_admin' => 'ibw.partymember.admin.partymemberbranch',  '_sonata_name' => 'admin_ibw_partymember_partymemberbranch_delete',));
                    }

                    // admin_ibw_partymember_partymemberbranch_show
                    if (preg_match('#^/admin/ibw/partymember/partymemberbranch/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_partymember_partymemberbranch_show')), array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberBranchAdminController::showAction',  '_sonata_admin' => 'ibw.partymember.admin.partymemberbranch',  '_sonata_name' => 'admin_ibw_partymember_partymemberbranch_show',));
                    }

                    // admin_ibw_partymember_partymemberbranch_export
                    if ($pathinfo === '/admin/ibw/partymember/partymemberbranch/export') {
                        return array (  '_controller' => 'Ibw\\PartymemberBundle\\Controller\\PartymemberBranchAdminController::exportAction',  '_sonata_admin' => 'ibw.partymember.admin.partymemberbranch',  '_sonata_name' => 'admin_ibw_partymember_partymemberbranch_export',  '_route' => 'admin_ibw_partymember_partymemberbranch_export',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
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

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
